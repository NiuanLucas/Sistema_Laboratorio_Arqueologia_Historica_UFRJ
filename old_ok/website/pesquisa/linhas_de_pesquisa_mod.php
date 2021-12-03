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

<style type="text/css" media="screen">


    ul {
        list-style-type: none;
        padding-left: 0px;
    }
    h3 {
        font-size: 17px !important;    
    }
    table{
        border-spacing: 0px !important;
        padding: 0px 0px 0px 10px !important;
        margin:  0px 0px 15px 0px !important;
    }
    td{
        padding: 0px 0px 0px 10px !important;
        margin:  0px 0px 0px 0px !important;
    }
    td {
        border: 1px solid #dee2e6;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        padding: 5px 0px 0px 10px !important;
        margin:  0px 0px 0px 0px !important;
    } 
    tr {
        background-color: white;
        padding: 0px 0px 0px 0px !important;
        margin:  0px 0px 0px 0px !important;
    } 

</style>

<div class="container mt-0 mb-0"></br>
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
    <?php if ( (exibir_texto('pagina_modular', 0 ) != NULL )): ?>
        <h3 class="font-weight-bold text-center">PROJETOS EM CURSO</h3>
        <?php echo( exibir_texto('pagina_modular', 0 ) );  ?>
    <?php endif ?>       
        </div>

        <div class="col-sm-12">
    <?php if ( (exibir_texto_2('pagina_modular', 0 ) != NULL )): ?>               
        <h3 class="font-weight-bold text-center">PROJETOS CONCLUÍDOS</h3>
        <?php echo( exibir_texto_2('pagina_modular', 0 ) );  ?>    
    <?php endif ?>   
        </div>
    </div>
</div>

<div class="float-left link_anterior" id="link_anterior"> 
<hr><a class="mt-0" href="../pesquisa/linhas_de_pesquisa.php?pg_id=8" style="cursor: pointer;"> 
<i class="fas fa-arrow-left"></i> Página Anterior </a></br>
</div>

<?php require_once "../footer.php";  ?>