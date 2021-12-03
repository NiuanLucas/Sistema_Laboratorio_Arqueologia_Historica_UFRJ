<?php require_once "../header.php";  ?>



<?php

    // Consulta a Tabela Paginas Modulares

    $tr2 = "SELECT * ";

    $tr2 .= "FROM paginas_modulares ";

    $tr2 .= "WHERE pagina_modular_categoria = 'programas'";

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

        <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?>

            <div class="col-sm-6">
                <h3 class="font-weight-bold" style="line-height: 130% !important;"><?php echo $linha["pagina_modular_titulo"] ?></h3>
                <div class=""> <?php echo( exibir_texto('pagina_modular',  $linha["pagina_modular_id"] ) );  ?></div>
                <div class="mb-3"><?//php echo( exibir_galeria( $linha["pagina_modular_slide"], '../../dashboard/dados/', '') ); ?></div>
            </div>

            <div class="col-sm-6 image-right mt-3">
                </br></br><?php echo( exibir_slide( $linha["pagina_modular_slide"], '../../dashboard/dados/', '490px', '100%') ); ?>  
            </div>

            <div class="col-sm-12">
                <div class=""> <?php echo( exibir_texto_2('pagina_modular',  $linha["pagina_modular_id"] ) );  ?> </div>
            </div>

        <?php } ?>        

         
   
    </div>

</div>



<?php require_once "../footer.php";  ?>