<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categoria;
use App\Models\Producto;

class Categorias extends Controller{

    public function index()
    {
        $cat = new categoria();
        $datos['cats']= $cat->orderBy('id','ASC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('categorias/index', $datos);
    }

    public function nuevo(){

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('categorias/nuevo', $datos);

    }

    public function editar($id=null){

        $cat = new categoria();
        $datos['cat'] = $cat->where('id',$id)->first();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('categorias/editar', $datos);

    }

    public function guardar(){

        $cat = new categoria();
        $session=session();

        $nombre = $this->request->getVar('nombre');
        $datos=[
            'nombre_cat'=>$this->request->getVar('nombre'),
            'descripcion'=>$this->request->getVar('descripcion')
        ];

        if (!$this->validate('formCat')){
           
            $session->setflashdata('msn_error','Por favor llenar todos los campos.');

            return redirect()->back()->withInput();
        }

        $session->setflashdata('msn_success','¡Categoría creada con exito!');
        $cat->insert($datos);
        

        return $this->response->redirect(base_url('categorias'));
        #return view('libros/crear');
    }

    public function actualizar(){

        $cat = new categoria();

        $id = $this->request->getVar('id');
        $datos=[
            'nombre_cat'=>$this->request->getVar('nombre'),
            'descripcion'=>$this->request->getVar('descripcion')
        ];

        if (!$this->validate('formCat')){
            $session=session();
            $session->setflashdata('msn_error','Por favor llenar todos los campos.');

            return redirect()->back()->withInput();
        }

        $session=session();
        $session->setflashdata('msn_success','¡Categoría actualizada con exito!');
        $cat->update($id,$datos);

        return $this->response->redirect(base_url('categorias'));
        #return view('libros/crear');
    }

    public function borrar($id=null){

        $cat = new categoria();
        $cat->where('id',$id)->delete($id);
        $session=session();

        $producto = new producto();
        $datos['producto'] = $producto->where('id',$id)->first();

        if($datos['producto']){

            $session->setflashdata('msn_error','No se puede eliminar categoría, esta asociada a un producto.');

            return $this->response->redirect(base_url('categorias'));
        }

        $session=session();
        $session->setflashdata('msn_success','¡Categoría eliminada con exito!');

        return $this->response->redirect(base_url('categorias'));

    }

}