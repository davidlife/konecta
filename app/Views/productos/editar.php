<?=$header;?>
<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            Productos
        </div>
        <div class="card-body">
            <h5 class="card-title">Editar producto</h5>
            <form method="post" action="<?=base_url('productos/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$producto['id'] ?>">
                <div class="form-group">
                    <label for="my-input">Nombre</label>
                    <input id="nombre" class="form-control" type="text" value="<?=$producto['nombre_producto'] ?>" required name="nombre">
                </div>
                <div class="form-group">
                    <label for="my-input">Referencía</label>
                    <input id=referencia" class="form-control" type="text" value="<?=$producto['referencia'] ?>" name="referencia">
                </div>
                <div class="form-group">
                    <label for="my-input">Precio</label>
                    <input id="precio" class="form-control" type="text" value="<?=$producto['precio'] ?>" name="precio">
                </div>
                <div class="form-group">
                    <label for="my-input">Peso</label>
                    <input id="peso" class="form-control" type="text" value="<?=$producto['peso'] ?>" name="peso">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoría de productos</label>
                    <select class="form-control" id="categoria" name="categoria">
                    
                    <option value="">Seleccionar</option>
                    <?php foreach($cats as $cat): ?>
                    <option <?php if($producto['categoria']==$cat['id']){?> selected <?php }?> value="<?=$cat['id'] ?>"><?=$cat['nombre_cat'] ?></option>
                    <?php endforeach ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="my-input">Stock</label>
                    <input id="stock" class="form-control" type="text" value="<?=$producto['stock'] ?>" name="stock">
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <a href="<?=base_url('productos');?>" class="btn btn-danger" type="submit">Cancelar</a>
                
            </form>
        </div>
    </div>
    <hr>
</div>
<?=$footer;?>