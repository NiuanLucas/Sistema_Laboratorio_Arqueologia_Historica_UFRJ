<?php require_once "../header.php";  ?>



<div class="container mt-4 mb-4"></br>



<div class="row">

	<div class="col-sm-6" style="line-height: 28px;" >

		<?php echo( exibir_texto('pagina_fixa', 2 ) );  ?>	

	</div>



	<div class="col-sm-6 mt-2">

	 <?php echo( exibir_slide( 22, '../../dashboard/dados/', '100%', '280') ); ?>

	</div>

</div>



<div class="row">

	<h2 class="col-8 mb-4 mt-4 border-bottom">

	<strong>

	Novidades e Eventos 

	</strong>

	</h2>

</div>





<div class="row">	



	<?php echo( exibir_card_social(2,'../../dashboard/dados/') ); ?>

	<?php echo( exibir_card_social(3,'../../dashboard/dados/') ); ?>

	<?php // echo( exibir_card( 4, '../../dashboard/dados/', 'noticia_mod.php?pg_id=' ) ); ?>



	<div class='col-sm-4 mb-4 border-0'>

		<div class='card mt-2'>

		<a style='text-decoration: none;' target='_blank' href='../difusao_do_conhecimento/programas.php?pg_id=9'>

          <center><img  class='card-img-top' style="width: auto; height: 200px; object-fit: contain;"  src='../../dashboard/dados/upload/LogoPROGRAMA2.jpg' ></center>

          <div class='card-body'>

          <h6 class='card-title-sub'> </h6> 

             <center><h5 class='card-title'>Conheça o nosso <br> Programa de Extensão</h5></center>

          </div>

      	</a>

    	</div>

    </div>	



</div>



</div>





<style type="text/css" media="screen">

.links_rodape {

display: none; 

}



.caminho{

display: none; 

}

</style>









<?php require_once "../footer.php";  ?>