<?php require_once "../header.php";  ?>
<base target="_blank"> 

<div class="container mt-0 mb-4"></br>
	<div class="row ">

<div class="col-sm-12">
    <h2><b>  
        <?php if ( (exibir_caminho('pagina_fixa', 0)[4]) == false ) {
        echo(exibir_caminho('pagina_modular', 0)[1] );
        } else {
        echo(exibir_caminho('pagina_fixa', 0)[4]);    
        }?>
     </b></h2>
</div>  		

<div class="col-sm-6">
	<?php echo( exibir_texto('pagina_fixa', 11 ) );  ?>	
</div>

<div class="col-sm-6 image-right mb-3">
 <?php echo( exibir_slide( 8, '../../dashboard/dados/', '490px', '100%') ); ?>	
</div>

<div class="col-sm-12">
	<?php echo( exibir_texto('pagina_fixa', 31 ) );  ?>	
</div>

	</div>
</div>

<style type="text/css" media="screen">
.link_anterior{
display: none; 
}
</style>

<?php require_once "../footer.php";  ?>