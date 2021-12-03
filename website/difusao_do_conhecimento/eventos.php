<?php require_once "../header.php";  ?>

<?php
    // Consulta a Tabela Paginas Modulares
    $tr2 = "SELECT * ";
    $tr2 .= "FROM paginas_modulares ";
    $tr2 .= "WHERE pagina_modular_categoria = 'eventos' ";
    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("Falha na consulta ao banco Eventos | Home");   
    }
?>


<div class="container mt-0 mb-4"></br>
    <div class="row">

       <div class="col-sm-12">
        <h2><b>  
            <?php if ( (exibir_caminho('pagina_fixa', 0)[4]) == false ) {
            echo(exibir_caminho('pagina_modular', 0)[1] );
            } else {
            echo(exibir_caminho('pagina_fixa', 0)[4]);    
            }?>
         </b></h2>
        </div> 

        <div class="col-sm-12">
        <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?>

        <div class=" mb-4">    
        <h3 class="font-weight-bold"><?php echo $linha["pagina_modular_titulo"] ?></h3>
        <?php echo( exibir_texto('pagina_modular', $linha["pagina_modular_id"] ) );  ?> 
        <?php echo( exibir_galeria( $linha["pagina_modular_slide"], '../../dashboard/dados/', '') ); ?>
        </div>

        <?php } ?>        
        </div> 

    
    </div>
</div>

<?php require_once "../footer.php";  ?>