
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p></p>

    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. DavidLife</p>

    </div>

</footer>

<!-- SCRIPTS -->


<!-- -->

</body>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 


<script>

$(".id").change(function() {
    $.ajax({
        url: "<?=base_url('search');?>/"+$(this).val(),
        context: document.body,
        method: "GET",
        }).done(function(datos) {
        $("#producto").val( datos );
        $("#mensaje").css("display",'none');
        
    }).fail(function() {
        $("#mensaje").css("display",'inherit');
        $("#producto").val( "Producto" );
    });
});

$(".cantidad").change(function() {
    $.ajax({
        url: "<?=base_url('precio');?>/"+$("#name").val()+"/"+$(this).val(),
        context: document.body,
        method: "POST",
        }).done(function(datos) {
            $cantidad = $("#cantidad").val();
        $("#precio").val( "$"+datos*$cantidad );
        
        
    }).fail(function() {
        $("#mensaje").removeClass("invisible");
        $("#cantidad").val( "cantidad" );
    });
});

   
</script>
</html>