<?php require "header.php";  ?>

<base target="_blank"> 
<div class="container mt-5 mb-4">
	<div class="row">

        <div class="col-sm-12">
            <h2> <b><?php echo $dados_pagina_fixa["pagina_titulo"];?> </b></h2>
        </div>

        <div class="col-sm-6">
            <?php echo base64_decode($dados_pagina_fixa["pagina_conteudo"]);  ?>	
        </div>
 
        <div class="col-sm-6">
            <img class="d-block" 
            style="width: 100% !important; max-height: 350px !important;" 
            src="../dashboard/dados/<?php echo $dados_pagina_fixa["pagina_imagem_capa"];?>"
            >
        <?php //echo( exibir_slide( 6, '../dashboard/dados/', '100%', '300') ); ?>
        </div>

        <div class="col-sm-12">
            <?php echo base64_decode($dados_pagina_fixa["pagina_conteudo_2"]);  ?>	
        </div>

	</div>
</div>

<?php require_once "footer.php";  ?>