<?php 
namespace App\Models;

use CodeIgniter\Model;

class Venta extends Model{
    protected $table      = 'ventas';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields = ['id_producto','nombre_producto','precio_venta','cantidad','fecha'];
}