<?php require_once "../header.php";  ?>
<base target="_blank"> 

<div class="container mt-0 mb-4"></br>
	<div class="row ">

	<div class="col-sm-12">
	<?php echo( exibir_texto('pagina_fixa', 0 ) );  ?>	
	</div>

	<div class="col-sm-12 img-lap">
	<?php echo( exibir_texto('pagina_fixa', 38 ) );  ?>	
	</div>

	<style type="text/css" media="screen">
	.link_anterior{
	display: none; 
	}

@media (max-width: 400px) {
	.img-lap img {
	width: 100% !important;
	height: 45px !important;
	border:  0px solid red;
	padding-right: 10px;
	 }
	</style>

	</div>
</div>




<?php require_once "../footer.php";  ?>