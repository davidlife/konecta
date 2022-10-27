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
                    <div class="col-7">
                    <input type="text" class="form-control" name="producto" placeholder="Producto"></div>
                    <div class="col">
                    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad"></div>
                    <div class="col">
                    <button class="btn btn-info" type="submit">Vender</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                    <td><?=$venta['cantidad'] ?></td>
                    <td><?=$venta['cantidad'] ?></td>
                    <td><?=$venta['precio_venta'] ?></td>

                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?=$footer;?>