<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tienda Konecta</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="<?=base_url();?>/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="#" target="">
                    <img src="<?=base_url();?>/images/logokonecta.png" width="80%" alt="">
                </a>
            </li>
            <li class="menu-item hidden"><a href="<?=base_url();?>/" target="_self">Tienda</a></li>
            <li class="menu-item hidden"><a href="<?=base_url();?>/productos">Productos</a></li>
            <li class="menu-item hidden"><a href="<?=base_url();?>/categorias" target="_self">Categorías</a>
            </li>
            
        </ul>
    </div>

</header>

<?php if(session('msn_error')){?>
    <div class="alert alert-danger" role="alert"><h5 class="alert-heading"><?php echo session('msn_error') ?></h5></div>
<?php }?>

<?php if(session('msn_success')){?>
    <div class="alert alert-success" role="alert"><h5 class="alert-heading"><?php echo session('msn_success') ?></h5></div>
<?php }?>

<div style="display:none" class="alert alert-danger" id="mensaje" role="alert"><h5 class="alert-heading">Codigo de producto no encontrado :(</h5></div>  