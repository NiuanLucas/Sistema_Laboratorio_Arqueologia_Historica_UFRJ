<?php require_once "../header.php";  ?>

<?php

$contador_artigo = 0;
$contador_tese = 0;

        if( isset($_GET["pg_id"]) ){
        $pagina_id = $_GET["pg_id"];
        } else {
          $pagina_id = 2;
        }

        //Consulta a tabela usuarios
        $consulta_artigo =  "SELECT * ";
        $consulta_artigo .= "FROM producao_academica_ufrj ";
        $consulta_artigo .= "WHERE producao_academica_categoria_id = {$pagina_id} ";
        $consulta_artigo .= "AND producao_academica_tipo = 'artigos' ORDER BY producao_academica_ano DESC ";

        //Consulta a tabela usuarios
        $consulta_tese =  "SELECT * ";
        $consulta_tese .= "FROM producao_academica_ufrj ";
        $consulta_tese .= "WHERE producao_academica_categoria_id = {$pagina_id} ";
        $consulta_tese .= "AND producao_academica_tipo = 'teses_dissertacoes' ORDER BY producao_academica_ano DESC ";

        //Consulta a tabela usuarios
        $pagina_info =  "SELECT * ";
        $pagina_info .= "FROM producao_academica_ufrj ";
        $pagina_info .= "WHERE producao_academica_categoria_id = {$pagina_id} ORDER BY producao_academica_ano DESC";

        $info_pagina = mysqli_query($conecta, $pagina_info);
        $consulta_artigo = mysqli_query($conecta, $consulta_artigo);
        $consulta_tese = mysqli_query($conecta, $consulta_tese);

        $contador_artigo = mysqli_num_rows($consulta_artigo);
        $contador_tese = mysqli_num_rows($consulta_tese);


        if(!$info_pagina) {
        die(" Falha na Base de Dados! Header Produção Academica: " .$info_pagina);  
        } else {
          echo "";

        }
?>

<style type="text/css" media="screen">

div#producao a, td {
	font-size: 14px !important;
	line-height: 100% !important;
  margin: 0px !important;
  padding: 5px 5px 5px 0px !important; 
  overflow: hidden !important;
}

tr {
}

td {
  margin: 0px !important;
  padding: 5px 5px 5px 5px !important;
  vertical-align:middle !important  
}

th {
  margin: 0px !important;
  padding: 5px 5px 0px 5px !important; 
}

.sub-tabela {
  font-size: 14px !important;
  line-height: 100% !important;
  font-weight: normal; 
}

.bg-titulo-tabela {
  background-color: rgba(220,220,220,1);
}

</style>

<div class="container mt-0 mb-4" id="producao"></br>

<?php
    // Consulta a Tabela Usuarios
    $tr33 = "SELECT * ";
    $tr33 .= "FROM paginas_modulares WHERE pagina_modular_id = {$pagina_id} ";
    $consulta_tr33 = mysqli_query($conecta, $tr33);
    if(!$consulta_tr33) {
        die("Falha na consulta ao banco Usuarios Header | Usuarios ");   
    }
    $linha33 = mysqli_fetch_assoc($consulta_tr33);
?>



    <div class="row">
        <div class="col-sm-12">
       <h2 class="m-0 p-0"><b> <?php echo $linha33["pagina_modular_descricao"] ?> </b></h2>
       <p class="text-secondary" style="line-height: 100% !important;"><i>As publicações listadas podem ser acessadas em nosso repositório ou através dos sites das editoras. </br> Caso tenha dificuldade em acessar qualquer arquivo, entre em contato conosco.</i></p>

<?php if ($contador_artigo > 0) { ?>

        <h3 class="m-0 p-0"><b> Artigos  </b></h3>

        <?php
        //Consulta a tabela usuarios
        $pagina_info =  "SELECT * ";
        $pagina_info .= "FROM producao_academica_ufrj ";
        $pagina_info .= "WHERE producao_academica_categoria_id = {$pagina_id} ORDER BY producao_academica_ano DESC ";

        $info_pagina = mysqli_query($conecta, $pagina_info);
        if(!$info_pagina) {
        die(" Falha na Base de Dados! Header Produção Academica: " .$info_pagina);  
        } else {
          echo "";

        }
        ?>


        <table class="table table-striped table-responsive mt-0 mb-4">
          <thead>
            <tr class="bg-titulo-tabela text-dark text-center">

              <th scope="col">TÍTULO
              <p class="sub-tabela">(clique no titulo para acessar o arquivo em nosso repositorio)</p></th>

              <th scope="col">AUTORES
              <p class="sub-tabela">&nbsp;</p></th>

              <th scope="col">ANO
              <p class="sub-tabela">&nbsp;</p></th>

              <th scope="col">REFERÊNCIA              
              <p class="sub-tabela">(clique na referência para acessar o site da revista)</p></th>

            </tr>
          </thead>
          <tbody>
          <?php while(  $linha = mysqli_fetch_assoc($info_pagina)  ) { ?>
          <?php if ( $linha["producao_academica_tipo"] == "artigos"  ) { ?>  
              <tr>

              <td style="width: 35% !important;"><a target="_blank" href="<?php echo $linha["producao_academica_link_arquivo"] ?>">
              <?php echo $linha["producao_academica_titulo"] ?> </a></td>

              <td style="width: 25% !important;"><?php echo $linha["producao_academica_autores"] ?></td>

              <td style="width: 10% !important;" class="text-center"><?php echo $linha["producao_academica_ano"] ?></td>

              <td style="width: 30% !important;"><a target="_blank" href="<?php echo $linha["producao_academica_link_referencia"] ?>"><?php echo $linha["producao_academica_referencia"] ?> </a></td>

              </tr>
          <?php } } ?> 
          </tbody>
        </table>


<?php } ?>        


        <?php
        //Consulta a tabela usuarios
        $pagina_info =  "SELECT * ";
        $pagina_info .= "FROM producao_academica_ufrj ";
        $pagina_info .= "WHERE producao_academica_categoria_id = {$pagina_id} ORDER BY producao_academica_ano DESC ";

        $info_pagina = mysqli_query($conecta, $pagina_info);
        if(!$info_pagina) {
        die(" Falha na Base de Dados! Header Produção Academica: " .$info_pagina);  
        } else {
          echo "";

        }
        ?>   



<?php if ($contador_tese > 0) { ?>

        <h3 class="m-0 p-0"><b> Teses e Dissertações <?php //echo $contador_tese; ?> </b></h3>
        <table class="table table-striped table-responsive mt-0 mb-4">
            <thead>
              <tr class="bg-titulo-tabela text-dark text-center">
              <th scope="col">TÍTULO
              <p class="sub-tabela">(clique no titulo para acessar o arquivo em nosso repositorio)</p></th>

              <th scope="col">AUTORES
              <p class="sub-tabela">&nbsp;</p></th>

              <th scope="col">ANO
              <p class="sub-tabela">&nbsp;</p></th>

              <th scope="col">REFERÊNCIA              
              <p class="sub-tabela">&nbsp;</p></th>
              </tr>
            </thead>
            <tbody>
          <?php while(  $linha = mysqli_fetch_assoc($info_pagina)  ) { ?>
          <?php if ( $linha["producao_academica_tipo"] == "teses_dissertacoes"  ) { ?>  
              <tr>

              <td style="width: 35% !important;"><a target="_blank" href="<?php echo $linha["producao_academica_link_arquivo"] ?>"><?php echo $linha["producao_academica_titulo"] ?> </a></td>
                
              <td style="width: 25% !important;"><?php echo $linha["producao_academica_autores"] ?></td>

              <td style="width: 10% !important;" class="text-center"><?php echo $linha["producao_academica_ano"] ?></td>

              <td style="width: 30% !important;"><a target="_blank" href="<?php echo $linha["producao_academica_link_referencia"] ?>"><?php echo $linha["producao_academica_referencia"] ?> </a></td>

              </tr>
          <?php } } ?> 
            </tbody>
          </table>



<?php } ?>


<script type="text/javascript">
var x = document.getElementById("producao").getElementsByTagName("a");
var i = 0;
//var url = location.href + "ND";
var url = "https://lap.mn.ufrj.br/website/producao_academica/" + "ND";

for (i = 0; i < x.length; i++) {
if (x[i].href == url) {
   x[i].style.fontWeight = "normal";
   x[i].style.cursor = "default";
   //x[i].style.color = "#ff0000";
   x[i].style.pointerEvents = "none";  
} else {
   x[i].style.fontWeight = "bold";
   //x[i].style.color = "#0000ff"; 
}
}

//alert(' \n VALOR 1: ' + i + ' | \n VALOR 2: ' + url + ' | \n Valor 3: ' + x[13].href  ); 
</script>


        </div>        
    </div>
</div>

<?php require_once "../footer.php";  ?>