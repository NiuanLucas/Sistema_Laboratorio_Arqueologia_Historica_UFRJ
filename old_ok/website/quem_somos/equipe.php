<?php require_once "../header.php";  ?>
<?php require_once "../../dashboard/include.php";  ?>
<base target="_blank"> 

<div class="container mt-0 mb-4"></br>
    <div class="row ">

<div class="col-sm-12">
    <h2><b>  
        <?php if ( (exibir_caminho('pagina_fixa', 0)[4]) == false ) {
        echo(exibir_caminho('pagina_modular', 0)[1] );
        } else {
        echo(exibir_caminho('pagina_fixa', 0)[4]);    
        }?>
     </b></h2>
</div>        

<div class="col-sm-6" id="equipe">
    <?php echo( exibir_texto('pagina_fixa', 4) );?>
</div>

<div class="col-sm-6">
 <?php echo( exibir_slide( 6, '../../dashboard/dados/', '100%', '420px') ); ?>
</div>

    <div class="col-sm-12 mt-3">
    <a style="" target="_self" href="antigos_membros.php?pg_id=25"> 
    <p class="mt-4"><strong> Ex-Alunos e Antigos membros da equipe </strong> (clique aqui) </a></p>
    </div>

    </div>
</div>

<style type="text/css" media="screen">
div#equipe img {
        border: 0px solid blue;
        width: 16px !important;
        height: 16px !important;
        padding: 0px 0px 0px 0px !important;
        position: absolute !important;
        }

@media only screen and (max-width: 400px) {
    p{line-height: 100% !important;}
}

@media only screen and (min-device-width: 768px){
    p{line-height: 35% !important;} 
</style>


<script type="text/javascript">

var x = document.getElementById("equipe").getElementsByTagName("IMG");
var i;
var endereco = "<?php print $url ?>";
//var endereco = "http://inoveai.epizy.com/10APP+LAP";
var img = "/dashboard/dados/upload/757485119.png";
var endereco_img = endereco + img;
//alert("Niuan: " + endereco_img + "");

for (i = 0; i < x.length; i++) {
if (x[i].src == endereco_img ) {
   x[i].style.border = "0px solid red";
   x[i].style.margin = "-5px 0px 0px 20px";
   
} else {
     x[i].style.border = "0px solid blue";
     x[i].style.margin = "-5px 0px 0px 0px";
}
}
//alert(' | VALOR: ' + url_caminho +'| SRC: ' +  x[14].src ); 

</script>


<style type="text/css" media="screen">
.link_anterior{
display: none; 
}
</style>


<?php require_once "../footer.php";  ?>