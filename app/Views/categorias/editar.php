<?=$header;?>
<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            Categoría
        </div>
        <div class="card-body">
            <h5 class="card-title">Actualizar Categoría</h5>
            <form method="post" action="<?=base_url('categorias/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$cat['id'] ?>">
                <div class="form-group">
                    <label for="my-input">Nombre</label>
                    <input id="nombre" class="form-control" type="text" value="<?=$cat['nombre_cat'] ?>"  name="nombre">
                </div>
                <div class="form-group">
                    <label for="my-textarea">Descripción</label>
                    <textarea id="descripcion" class="form-control" name="descripcion" rows="3"><?=$cat['descripcion'] ?></textarea>
                </div>

                <button class="btn btn-success" type="submit">Actualizar</button>
                <a href="<?=base_url('categorias');?>" class="btn btn-danger" type="submit">Cancelar</a>
                
            </form>
        </div>
    </div>
    <hr>
</div>
<?=$footer;?>