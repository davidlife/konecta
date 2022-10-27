<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
use App\Models\venta;

class Tienda extends Controller{

    public function index()
    {
        $producto = new producto();
        $datos['productos']= $producto->orderBy('id','ASC')->findAll();


        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        $consulta = new venta();
        $datos['ventas']= $consulta->orderBy('id','ASC')->findAll();

        return view('index', $datos);
    }

    public function venta(){

        $producto = new producto();
        $id = $this->request->getVar('id');
        print_r($id);
        $datoProducto = $producto->where('id',$id)->first();
        $stock = $datoProducto['stock'];
        $totalStock= ($stock - $this->request->getVar('cantidad'));
        
        $datos=[
            'stock'=>$totalStock
        ];
        $producto->update($id,$datos);

        $venta = new venta();
        $datos=[
            'id_producto'=>$this->request->getVar('id'),
            'cantidad'=>$this->request->getVar('cantidad'),
            'fecha_venta'=>date('Y/m/d H:m')
        ];
        $venta->insert($datos);

    
        return $this->response->redirect(base_url('/'));
        
    }

}