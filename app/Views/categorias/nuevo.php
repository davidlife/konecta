<?=$header;?>
<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            Categoría
        </div>
        <div class="card-body">
            <h5 class="card-title">Crear Categoría</h5>
            <form method="post" action="<?=base_url('categorias/guardar')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Nombre</label>
                    <input id="nombre" class="form-control" type="text" value="<?=old('nombre')?>" name="nombre">
                </div>
                <div class="form-group">
                    <label for="my-textarea">Descripción</label>
                    <textarea id="descripcion" class="form-control" name="descripcion" rows="3"></textarea>
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>
                <a href="<?=base_url('categorias');?>" class="btn btn-danger" type="submit">Cancelar</a>
                
            </form>
        </div>
    </div>
    <hr>
</div>
<?=$footer;?>