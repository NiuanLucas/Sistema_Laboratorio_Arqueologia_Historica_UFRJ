<?php require_once "../header.php";  ?>
<base target="_blank"> 

<div class="container mt-0 mb-4"></br>
	<div class="row">
	<div class="col-sm-12">
		<?php echo( exibir_texto('pagina_fixa', 14 ) );  ?>	
	 	<?php echo( exibir_galeria( 10, '../../dashboard/dados/', '') ); ?>
		<?php echo( exibir_texto('pagina_fixa', 32) );  ?>	
	</div>
	</div>
</div>


<?php require_once "../footer.php";  ?>