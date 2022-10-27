<?=$header?>

<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
        <a href="<?=base_url('categorias/nuevo')?>" class="btn btn-success">Crear categoría</a>

        </div>
        <div class="card-body">
            <h5 class="card-title">Categorías</h5>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Accciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($cats as $cat): ?>
                        <tr>
                            <td><?=$cat['id'] ?></td>
                            <td><?=$cat['nombre_cat'] ?></td>
                            <td><?=$cat['descripcion'] ?></td>

                            <td>
                                <a href="<?=base_url('categorias/editar/'.$cat['id'])?>" class="btn btn-info" type="button">Editar</a> 
                                <a href="<?=base_url('categorias/borrar/'.$cat['id'])?>" class="btn btn-danger" type="button">Borrar</a>
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