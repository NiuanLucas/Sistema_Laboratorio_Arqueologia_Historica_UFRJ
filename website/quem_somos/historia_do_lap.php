<?php require_once "../header.php";  ?>
<base target="_blank"> 


<style type="text/css" media="screen">
ul {
    list-style-type: none;
    margin:  0px;
    padding: 0px;
}
</style>


<div class="container mt-0 mb-4"></br>
	<div class="row" style="">
		<div class="col-sm-12">

			<?php echo( exibir_texto('pagina_fixa', 7 ) );  ?>	

			<?php echo( exibir_galeria( 7, '../../dashboard/dados/', 'justify-content-left') ); ?>

			<?php echo( exibir_texto('pagina_fixa', 27 ) );  ?>

			<?php echo( exibir_texto('pagina_fixa', 28 ) );  ?>	

			<?php echo( exibir_galeria( 24, '../../dashboard/dados/', '') ); ?>

			<?php echo( exibir_texto('pagina_fixa', 29 ) );  ?>

			<?php echo( exibir_texto('pagina_fixa', 37 ) );  ?>

		</div>
	</div>
</div>

<style type="text/css" media="screen">
.link_anterior{
display: none; 
}
</style>

	
<?php require_once "../footer.php";  ?>