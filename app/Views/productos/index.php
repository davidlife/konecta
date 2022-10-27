<?=$header?>

<div class="container">
    <hr>

    <div class="card">
        <div class="card-header">
        <a href="<?=base_url('productos/nuevo')?>" class="btn btn-success">Crear producto</a>

        </div>
        <div class="card-body">
            <h5 class="card-title">Productos</h5>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Referencia</th>
                            <th>Precio</th>
                            <th>Peso</th>
                            <th>Categoría</th>
                            <th>Stock</th>
                            <th>Fecha de creación</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($productos as $producto): ?>
                        <tr>
                            <td><?=$producto['id'] ?></td>
                            <td><?=$producto['nombre_producto'] ?></td>
                            <td><?=$producto['referencia'] ?></td>
                            <td><?=$producto['precio'] ?></td>
                            <td><?=$producto['peso'] ?></td>
                            <td><?=$producto['categoria'] ?></td>
                            <td><?=$producto['stock'] ?></td>
                            <td><?=$producto['fecha_creacion'] ?></td>

                            <td>
                                <a href="<?=base_url('productos/editar/'.$producto['id'])?>" class="btn btn-info" type="button">Editar</a> 
                                <a href="<?=base_url('productos/borrar/'.$producto['id'])?>" class="btn btn-danger" type="button">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
        </div>
    </div>
    <hr>
</div>

<?=$footer?>