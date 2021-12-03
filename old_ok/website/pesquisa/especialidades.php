<?php require_once "../header.php";  ?>

<?php
    // Consulta a Tabela Paginas Modulares
    $tr2 = "SELECT * ";
    $tr2 .= "FROM paginas_modulares ";
    $tr2 .= "WHERE pagina_modular_categoria = 'especialidades' ORDER BY pagina_modular_id ASC";
    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("Falha na consulta ao banco Especialidades | Home");   
    }
?>


	
<div class="container mt-0 mb-4"></br>
  <div class="row " style="">

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
    <?php echo( exibir_texto('pagina_fixa', 10 ) );  ?> 
  </div>

  <div class="col-sm-6 image-right">
   <?php echo( exibir_slide( 26, '../../dashboard/dados/', '100%', '100%') ); ?>
  </div>

  </div>

  <div class="row">

  <div class="col-sm-12 mt-0 mb-0">
  <?php echo( exibir_texto('pagina_fixa', 30 ) );  ?>  
  </div>

 
<center>
  <div class=" col-sm-12 card-deck p-0 m-0 ml-2 mt-3 mb-0 ">
    <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?> 

      <div class="card bg-transparent">
        <a href="especialidade_mod.php?pg_id=<?php echo $linha['pagina_modular_id'] ?>" >
        
        <img class="card-img-top p-0 m-0" style="max-height: 200px; width: auto;" src="../../dashboard/dados/<?php echo $linha['pagina_modular_imagem_capa'] ?>" >

        <div class="card-body p-0 m-0 mt-2">
          <h5 class="" style="font-size: 100% !important; font-family: Helvetica, sans-serif !important;" ><b><?php echo $linha["pagina_modular_titulo"] ?></b></h5>
        </div>

        </a>
      </div>

    <?php } ?>
  </div>
</center>

  <div class="col-sm-12" style="margin-top:  -20px !important;">
    <?php echo( exibir_texto('pagina_fixa', 33 ) );  ?>  
  </div>

  </div>
</div>

<style type="text/css" media="screen">
.link_anterior{
display: none; 
}
</style>
<?php require_once "../footer.php";  ?>