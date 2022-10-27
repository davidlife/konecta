<?=$header;?>
<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            Productos
        </div>
        <div class="card-body">
            <h5 class="card-title">Crear producto</h5>
            <form method="post" action="<?=base_url('productos/guardar')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Nombre</label>
                    <input id="nombre" class="form-control" type="text" value="<?=old('nombre')?>" name="nombre">
                </div>
                <div class="form-group">
                    <label for="my-input">Referencía</label>
                    <input id=referencia" class="form-control" type="text" value="<?=old('referencia')?>" name="referencia">
                </div>
                <div class="form-group">
                    <label for="my-input">Precio</label>
                    <input id="precio" class="form-control" type="text" value="<?=old('precio')?>" name="precio">
                </div>
                <div class="form-group">
                    <label for="my-input">Peso en gramos</label>
                    <input id="peso" class="form-control" type="text" value="<?=old('peso')?>" name="peso">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoría de productos</label>
                    <select class="form-control" id="categoria" name="categoria">
                    
                    <option value="">Seleccionar</option>
                    <?php foreach($cats as $cat): ?>
                    <option value="<?=$cat['id'] ?>"><?=$cat['nombre_cat'] ?></option>
                    <?php endforeach ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="my-input">Stock</label>
                    <input id="stock" class="form-control" type="text" value="<?=old('stock')?>" name="stock">
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <a href="<?=base_url('productos');?>" class="btn btn-danger" type="submit">Cancelar</a>
                
            </form>
        </div>
    </div>
    <hr>
</div>
<?=$footer;?>