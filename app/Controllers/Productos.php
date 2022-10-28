<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
use App\Models\categoria;

class Productos extends BaseController
{
    public function index()
    {
        $producto = new producto();
        $datos['productos']= $producto->orderBy('id','ASC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
       
        return view('productos/index', $datos);
    }

    public function nuevo(){

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        $cat = new categoria();
        $datos['cats']= $cat->orderBy('id','ASC')->findAll();
        return view('productos/nuevo', $datos);

    }

    public function guardar(){

        $producto = new producto();
        $session=session();
        $datos=[
            'nombre_producto'=>$this->request->getVar('nombre'),
            'referencia'=>$this->request->getVar('referencia'),
            'precio'=>$this->request->getVar('precio'),
            'peso'=>$this->request->getVar('peso'),
            'categoria'=>$this->request->getVar('categoria'),
            'stock'=>$this->request->getVar('stock'),
            'fecha_creacion'=>date('Y/m/d H:m')
        ];

        if (!$this->validate('formProd')){
           
            $session->setflashdata('msn_error','Por favor llenar todos los campos.');

            return redirect()->back()->withInput();
        }
        $producto->insert($datos);

        $session->setflashdata('msn_success','¡Producto creado con exito!');
        return $this->response->redirect(base_url('productos'));
        #return view('libros/crear');
    }

    public function editar($id=null){

        $producto = new producto();
        $datos['producto'] = $producto->where('id',$id)->first();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        $cat = new categoria();
        $datos['cats']= $cat->orderBy('id','ASC')->findAll();
        return view('productos/editar', $datos);

    }

    public function actualizar(){

        $producto = new producto();
        $session=session();
        $id = $this->request->getVar('id');
        $datos=[
            'nombre_producto'=>$this->request->getVar('nombre'),
            'referencia'=>$this->request->getVar('referencia'),
            'precio'=>$this->request->getVar('precio'),
            'peso'=>$this->request->getVar('peso'),
            'categoria'=>$this->request->getVar('categoria'),
            'stock'=>$this->request->getVar('stock')
        ];

        if (!$this->validate('formProd')){
           
            $session->setflashdata('msn_error','Por favor llenar todos los campos.');
            return redirect()->back()->withInput();
        }
        $session->setflashdata('msn_success','¡Producto actualizado con exito!');
        $producto->update($id,$datos);

        return $this->response->redirect(base_url('productos'));
        #return view('libros/crear');
    }

    public function borrar($id=null){

        $producto = new producto();
        $producto->where('id',$id)->delete($id);
        $session=session();
        $session->setflashdata('msn_success','¡Producto eliminado con exito!');

        return $this->response->redirect(base_url('productos'));

    }

}
