<?=$header;?>

<div class="container">

    <hr>
    <div class="card">
        <div class="card-header">
            Portal de ventas
        </div>
        <div class="card-body">
            <h5 class="card-title">Tienda Konecta</h5>
            <form method="POST" action="<?=base_url('tienda/venta');?>">
                <div class="form-row">
                    
                    <div class="col">
                    <input type="number" class="form-control id" id="name" name="id" placeholder="Id"></div>

                    <div class="col-sm-3">
                    <input type="text" class="form-control" id="producto" value="<?=old('producto')?>" name="producto" disabled placeholder="Producto"><?=old('producto')?></div>

                    <div class="col">
                    <input type="number" class="form-control cantidad" disabled id="cantidad" value="<?=old('cantidad')?>" name="cantidad" placeholder="Cantidad"></div>
                      
                    <div class="col">
                    <input type="text" class="form-control" id="precio" name="precio" disabled placeholder="precio"></div>
                    
                    <button class="btn btn-info" type="submit">Vender</button>
                    
                </div>
            </form>
        </div>
    </div>

    <p class="card-title">Producto con más stock:
         <?php foreach ($stock as $row) {echo "$row->nombre_producto - $row->stock unidades";}?></p>
    <p class="card-title">Producto más vendido: 
        <?php foreach ($masVendido as $row) {echo "$row->nombre_producto - $row->cantidad unidades";}?> </p>
    <hr>
    <h5 class="card-title">Ventas</h5>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Id venta</th>
                <th>Id producto</th>
                <th>producto</th>
                <th>Cantidad</th>
                <th>precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ventas as $venta): ?>
                <tr>
                    <td><?=$venta['id_producto'] ?></td>
                    <td><?=$venta['id_producto'] ?></td>
                    <td><?=$venta['nombre_producto'] ?></td>
                    <td><?=$venta['cantidad'] ?></td>
                    <td>$<?=$venta['precio_venta'] ?></td>

                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?=$footer;?>