<?php require_once "../header.php";  ?>
<base target="_blank">


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

<div class="container mt-0 mb-5"></br>
	<div class="row ">


	<div class="col-sm-12">	
	<h2><strong class="m-0"> Pós-Graduação </strong></h2>

	<div class="row">
    <div class="col-sm-3 mb-2" >
    <a href="http://www.museunacional.ufrj.br/ppgarq/"><img class="img-fluid" src="../../dashboard/dados/upload/1860070550.png"/></a>
    </div>
    <div class="col-sm-6 mt-2 d-flex align-items-end">
    	<ul>
    		<li><strong>Programa de Pós-Graduação em Arqueologia</strong></li>
    		<li>Departamento de Antropologia, Museu Nacional, UFRJ</li>
    	</ul>
    </div>
	</div>
        <h3 class="font-weight-bold text-center mt-4">DISCIPLINAS OFERECIDAS</h3>
		<?php echo( exibir_texto('pagina_fixa', 0 ) );  ?>	
	</div>

	<div class="col-sm-12">

	<div class="row mt-5">
    <div class="col-sm-3 mb-2" >
    <a href="http://www.museunacional.ufrj.br/dgp/GeoQuater.html"><img class="img-fluid" src="../../dashboard/dados/upload/1112731529.png"/></a>
    </div>
    <div class="col-sm-6 mt-2 d-flex align-items-end">
    <ul>
		<li><strong>Curso de Especialização em Geologia do Quaternário</strong></li>
		<li>Departamento de Geologia e Paleontologia, Museu Nacional, UFRJ</li>
    </ul>		
    </div>
	</div>
        <h3 class="font-weight-bold text-center mt-4">DISCIPLINAS OFERECIDAS</h3>
		<?php echo( exibir_texto('pagina_fixa', 34 ) );  ?>	
	</div>

	</div>
</div>


<?php require_once "../footer.php";  ?>