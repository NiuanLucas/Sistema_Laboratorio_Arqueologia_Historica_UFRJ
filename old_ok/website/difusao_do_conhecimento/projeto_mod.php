<?php require_once "../header.php";  ?>

<?php

        //Consulta a tabela usuarios
        $pagina_info = "SELECT * ";
        $pagina_info .= "FROM paginas_modulares ";
        $pagina_info .= "WHERE pagina_modular_id = {$pagina_id} ";

        $info_pagina = mysqli_query($conecta, $pagina_info);
        if(!$info_pagina) {
        die(" Falha na Base de Dados! Header Pagina Modular ");  
        } else {
          echo "";

        }

        $dados_pagina = mysqli_fetch_assoc($info_pagina); 
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
            <div class="mb-0 row"> <?php echo( exibir_texto('pagina_modular', 0 ) );  ?> </div>

            <div class="mb-3"><?php echo( exibir_galeria( $dados_pagina["pagina_modular_slide"], '../../dashboard/dados/', '') ); ?></div>
            
            <?php echo( exibir_texto_2('pagina_modular', 0 ) );  ?> 
        </div>
        
    </div>
</div>

<?php require_once "../footer.php";  ?>