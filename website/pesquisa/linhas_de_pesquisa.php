<?php require_once "../header.php";  ?>

<?php
    // Consulta a Tabela Paginas Modulares
    $tr2 = "SELECT * ";
    $tr2 .= "FROM paginas_modulares ";
    $tr2 .= "WHERE pagina_modular_categoria = 'linhas_de_pesquisa' ";
    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("Falha na consulta ao banco Projetos | Home");   
    }
?>

<style type="text/css" media="screen">
.h3 {
    line-height: 150% !important;
    font-size: 17px !important; 
} 
.h1 {
    line-height: 100% !important;
    font-family: Helvetica, sans-serif !important; 
    font-size: 26px !important;
    font-weight: bold;
}         
</style>    
   
<div class="container mt-0 mb-4 p-0"></br>
	<div class="row">

    <div class="col-sm-12" id="equipe">
    <h2><b>  
        <?php if ( (exibir_caminho('pagina_fixa', 0)[4]) == false ) {
        echo(exibir_caminho('pagina_modular', 0)[1] );
        } else {
        echo(exibir_caminho('pagina_fixa', 0)[4]);    
        }?>
     </b></h2>
    </div>      

    <div class="col-sm-6">

    <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?>	
          	<a class=" h3" target="_blank" href="linhas_de_pesquisa_mod.php?pg_id=<?php echo $linha['pagina_modular_id'] ?>"> 
            ● &nbsp; <?php echo $linha["pagina_modular_titulo"] ?>
            </a><br>
    <?php } ?>

    <h2 class="mt-4"><b> Projetos </b></h2>
    <p>*Clicar em cada linha de pesquisa acima para ver os projetos.</p>
    <a target="_blank" href="http://dgp.cnpq.br/dgp/espelhogrupo/8196582057076372">
    <img class=""  src="../../assets/images/logo_lattes.png">
    </a>

    </div>

    <div class="col-sm-6">
     <?php echo( exibir_slide( 25, '../../dashboard/dados/', '100%', '270') ); ?>
    </div>

    </div>
</div>

<style type="text/css" media="screen">
.link_topo {
display: none; 
}

</style>

<style type="text/css" media="screen">
.link_anterior{
display: none; 
}
</style>


<?php require_once "../footer.php";  ?>