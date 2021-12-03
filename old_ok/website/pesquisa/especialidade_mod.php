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


<div class="container mb-4"></br>
    <div class="row">

        <div class="col-sm-12">
            <?php echo( exibir_texto('pagina_modular', 0 ) );  ?>


            <?php
            $pg_id = $_GET["pg_id"];

            if ($pg_id == "73") {
                echo( exibir_galeria(  $dados_pagina["pagina_modular_slide"], '../../dashboard/dados/', 'galeria-retrato') ); 
                
            } else {
            echo( exibir_galeria(  $dados_pagina["pagina_modular_slide"], '../../dashboard/dados/', '') ); 
            }

            ?>

            <?php echo( exibir_texto_2('pagina_modular', 0 ) );  ?>
        </div>

	</div>
</div>


<div class="float-left link_anterior" id="link_anterior"> 
<hr><a class="mt-0" target="_self" href="../pesquisa/especialidades.php?pg_id=10" style="cursor: pointer;"> 
<i class="fas fa-arrow-left"></i> Página Anterior </a></br>
</div>

<?php require_once "../footer.php";  ?>