<?php require_once "../header.php";  ?>
<base target="_blank"> 

<?php
    // Consulta a Tabela Paginas Modulares
    $tr2 = "SELECT * ";
    $tr2 .= "FROM cards ORDER BY card_id ASC";
    //$tr2 .= "WHERE pagina_modular_categoria = 'midias' ";
    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("Falha na consulta ao banco Noticias | Home ");   
    }
?>



<div class="container mt-0 mb-4"></br>
	<div class="row ">

	<div class="col-sm-12">
		<h2><b> Redes Sociais</b></h2>
	</div>

	<div class="col-sm-12 mt-2">
		<?php echo( exibir_texto('pagina_fixa', 0 ) );  ?>
	</div>


	<div class="col-sm-12 mt-4">
	<h1><b> Divulgação cientifica nas Redes</b></h1>

      <div class="row mt-4" id="card_pagina">   
      <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?>
      <?php if ( ($linha["card_categoria"] == ("facebook")) || ($linha["card_categoria"] == ("instagram"))  ) {  ?>

      <?php echo( exibir_card_social($linha["card_id"],'../../dashboard/dados/') ); ?>

      <?php } ?>
      <?php } ?>
      </div>

	</div>

	</div>
</div>

<script type="text/javascript">
	var x = document.getElementsByClassName("card-title-sub").length;
	for (var i = 0; i < x; i++) {
	document.getElementsByClassName('card-title-sub')[i].style.visibility = 'hidden';
	}
</script>


<?php require_once "../footer.php";  ?>

<?php /*
$url = "https://www.instagram.com/p/CKcXSlsAFmQ/";
libxml_use_internal_errors(true);
$c = file_get_contents($url);
$d = new DomDocument();
$d->loadHTML($c);
$xp = new domxpath($d);
foreach ($xp->query("//meta[@property='og:title']") as $el) {
    $url_titulo = $el->getAttribute("content");
}
foreach ($xp->query("//meta[@property='og:image']") as $el) {
    $url_image = $el->getAttribute("content");
}
echo $url;
echo $url_image;
echo $url_titulo; */
?>