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
        $datos['ventas']= $consulta->orderBy('id','DESC')->findAll();

        $db = \Config\Database::connect();
        $query = $db->query("SELECT id,nombre_producto,stock FROM productos where stock=(select max(stock) from productos)");
        $datos['stock']  = $query->getResult();

        $query2 = $db->query("select nombre_producto, count(cantidad) as total, sum(cantidad) as cantidad from ventas group by id_producto ORDER BY cantidad DESC LIMIT 1;
        ");
        $datos['masVendido']  = $query2->getResult();
        return view('index', $datos);
    }

    public function venta(){

        $producto = new producto();
        $session=session();
        $id = $this->request->getVar('id');
        
        $datoProducto = $producto->where('id',$id)->first();

        if(!$datoProducto){

            $session->setflashdata('msn_error','Codigo de producto no encontrado :(');
            return $this->response->redirect(base_url('/'));
        }

        if (!$this->validate('formVentas')){
           
            $session->setflashdata('msn_error','Por favor llenar la cantidad a vender.');
            return redirect()->back()->withInput();
        }

        $stock = $datoProducto['stock'];
        $precio = $datoProducto['precio'];
        $cantidad = $this->request->getVar('cantidad');
        $totalStock= ($stock - $cantidad);

        $totalVenta = ($precio*$cantidad);
        
        $datos=[
            'stock'=>$totalStock
        ];

        if($stock<$cantidad){
            $session->setflashdata('msn_error','Cantidad en inventario de '.$datoProducto['nombre_producto'].': '.$stock);
            return redirect()->back()->withInput();
        }


        $producto->update($id,$datos);

        $venta = new venta();
        $datos=[
            'id_producto'=>$this->request->getVar('id'),
            'cantidad'=>$this->request->getVar('cantidad'),
            'fecha_venta'=>date('Y/m/d H:m'),
            'precio_venta'=>$totalVenta,
            'nombre_producto'=>$datoProducto['nombre_producto']
        ];
        $venta->insert($datos);
        
        $session->setflashdata('msn_success','¡Producto vendido con exito!');
    
        return $this->response->redirect(base_url('/'));
        
    }

        public function search($id=null){

            $productos = new producto();
            $session=session();
            $datoProducto = $productos->where('id',$id)->first();

            $nombre_productos = $datoProducto['nombre_producto'];
            
           return $nombre_productos;
        }

        public function precio($id=null, $cantidad=null){

            $productos = new producto();
            $session=session();
            $datoProducto = $productos->where('id',$id)->first();

            $precio = $datoProducto['precio'];
            $precioTotal = $precio;
           
            return $precioTotal;
        }

}