<?php require_once "../../dashboard/include.php";  ?>
<?php require_once "../../dashboard/functions.php";  ?>

<?php
        if( isset($_GET["pg_id"]) ){
        $pagina_id = $_GET["pg_id"];
        } else {
          $pagina_id = 2;
        }

        //Consulta a tabela usuarios
        $pagina_info = "SELECT * ";
        $pagina_info .= "FROM paginas_fixas ";
        $pagina_info .= "WHERE pagina_id = {$pagina_id} ";

        $info_pagina = mysqli_query($conecta, $pagina_info);
        if(!$info_pagina) {
        die(" Falha na Base de Dados! Header Pagina Fixa ");  
        }

        $dados_pagina = mysqli_fetch_assoc($info_pagina); 
       
?>

<?php
    // Consulta a Tabela Paginas Modulares
    $tr2 = "SELECT * ";
    $tr2 .= "FROM paginas_modulares ";
    $tr2 .= "WHERE pagina_modular_categoria = 'especialidades' ORDER BY pagina_modular_id ASC";
    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("Falha na consulta ao banco Especialidades | Home");   
    }
?>


<?php
    // Consulta a Tabela Paginas Modulares
    $tr3 = "SELECT * ";
    $tr3 .= "FROM paginas_modulares ";
    $tr3 .= "WHERE pagina_modular_categoria = 'producao_academica' ORDER BY pagina_modular_id ASC";
    $consulta_tr3 = mysqli_query($conecta, $tr3);
    if(!$consulta_tr3) {
        die("Falha na consulta ao banco Especialidades | Home");   
    }
?>


<!DOCTYPE html>
<html>
<head>
  <title> Laboratório de Arqueobotânica e Paisagem – MN/UFRJ  </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/animate.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap-dropdownhover.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />

  <link rel="stylesheet" href="../../assets/css/blog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/bootnavbar.css"> 

  <link rel="icon" href="../../assets/images/favicon.png">
  <meta name="theme-color" content="#3c3c3c">
  <meta name="apple-mobile-web-app-status-bar-style" content="#3c3c3c">
  <meta name="apple-mobile-web-app-status-bar-style" content="#3c3c3c">

</head>
<body>


  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>



<style type="text/css">
.centered {
    margin: 0 auto !important;
    float: none !important;
}

  .image-right img {
float:  right !important;
}

.caminho {
margin-top:  -15px !important;
}

.container {
  padding: 5px !important;
}

.modal-footer {
text-align: left !important;
justify-content: left;
}

.galeria-retrato {
  margin: 10px 10px 20px 10px !important;
  padding: 0px !important;
  max-width: 180px;
}  

.galeria-retrato img {
  max-width: 180px;
  height: auto;
  margin: 0px !important;
  padding: 0px !important;
}  


/* ============ desktop view ============ *
@media all and (min-width: 992px) {
  .navbar .nav-item .dropdown-menu hover-drop { display: none; }
  .navbar .nav-item:hover .nav-link{ color: #fff;  }
  .navbar .nav-item:hover .dropdown-menu hover-drop { display: block; }
  .navbar .nav-item .dropdown-menu hover-drop { margin-top:0; }
} 
/* ============ desktop view .end// ============ */
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
  .navbar .nav-item .hover-drop{ display: none; }
  .navbar .nav-item:hover .hover-drop{ display: block; }
} 

@media all and (min-width: 992px) {
  .navbar .nav-item .nav-item .hover-drop-2{ display: none; }
  .navbar .nav-item .nav-item:hover .hover-drop-2{ display: block; }
} 
/* ============ desktop view .end// ============ */
/* ============ desktop view .end// ============ */

   /*.dropdown-menu {border-radius: 0px; background-color: rgba(35,35,35,1);}
  .dropdown-item {background-color:  rgba(0,0,0,0.05); color: #fff !important;} */
  .my-2 {background-color: rgba(255,255,255,0.25);}
</style>


<center>
<div class="div-principal" >

<!-- SLIDE -->	
<div class="slide_topo d-none d-md-block"></div>
<div class="slide_topo-mobile d-block d-md-none"></div>

    <div class="container">
      <header class="blog-header mt-3  d-none d-md-block w-100 border-0 mb-2">
        <div class="row p-0">

          <div class="text-left d-none d-md-block justify-content-left mb-1">
            <img src="../../assets/images/logo_museu_ufrj.png" class="img-logo"> 
            <img src="../../assets/images/logo_laboratorio.png" class="img-logo">						
          </div>

          <div class="float-right d-none d-md-block" style="position: absolute; top: 80%; left: 37.5%;">
          <h6 class="font-arial" style="font-size: 22.5px !important;">
          Laboratório de Arqueobotânica e Paisagem, Museu Nacional, UFRJ
      	  </h6>
      	  </div>

        </div>
      </header>


		<style type="text/css">

			#menu .main-menu ul{
			border-radius: 10px !important;
			background-color: white !important;
			margin-left:  15px;
			margin-right: 15px;
			}

			#menu ul {
			  margin: 0;
			  padding: 0;
			}

			#menu .main-menu {
			  display: none;
			}

			#tm:checked + .main-menu {
			  display: block;
			}

			#menu input[type="checkbox"], 
			#menu ul span.drop-icon {
			  display: none;
			}

			#menu li, 
			#toggle-menu, 
			#menu .sub-menu {
			  border-style: solid;
			  border-color: rgba(0, 0, 0, 0);
			}

			#menu li, 
			#toggle-menu {
			  border-width: 0 0 0px;
			  border: 0px solid rgba(0,0,0,0.0);
			}


			#menu .sub-menu {
			  border-width: 0px 0px 0;
			  margin: 0 0.25em;
			}


			#menu .sub-menu li:last-child {
			  border-width: 0;
			}

			#menu li, 
			#toggle-menu, 
			#menu a {
			  position: relative;
			  display: block;
			  color: white;  
			}

			#menu, 
			#toggle-menu {
			  background-color: rgba(55, 55, 55, 1) !important;
			}

			 #menu .sub-menu a {
			    color: rgba(70,50,30) !important;
			    text-shadow: 0px !important;
			  } 

			 #menu .sub-menu li {

			  }

			#toggle-menu, 
			#menu a {
			  padding: 1em 1.5em;
			}

			#menu a {
			  transition: all .125s ease-in-out;
			  -webkit-transition: all .125s ease-in-out;
			}

			#menu a:hover {
			}

			#menu .sub-menu {
			  display: none;
			}

			#menu input[type="checkbox"]:checked + .sub-menu {
			  display: block;
			}

			#menu .sub-menu a:hover {
			  color: #444;
			}

			#toggle-menu .drop-icon, 
			#menu li label.drop-icon {
			  position: absolute;
			  right: 1.5em;
			  top: 1.25em;
			}

			#menu label.drop-icon, #toggle-menu span.drop-icon {
			  border-radius: 50%;
			  width: 1em;
			  height: 1em;
			  text-align: center;
			  background-color: rgba(0, 0, 0, .25);
			  text-shadow: 0 0 0 transparent;
			  color: rgba(255, 255, 255, .75);
			}

			#menu .drop-icon {
			  line-height: 1;
			}

			@media only screen and (max-width: 64em) and (min-width: 52.01em) {
			  #menu li {
			    width: 33.333%;
			  }

			  #menu .sub-menu li {
			    width: auto;
			  }
			}

			@media only screen and (min-width: 52em) {
			  #menu .main-menu {
			    display: block;
			  }

			  #toggle-menu, 
			  #menu label.drop-icon {
			    display: none;
			  }

			  #menu ul span.drop-icon {
			    display: inline-block;
			  }

			  #menu li {
			    float: left;
			    border-width: 0 0px 0 0;
			  }

			  #menu .sub-menu li {
			    float: none;
			    border-radius: 5px;
			  }

			  #menu .sub-menu {
			    border-width: 0;
			    margin: 0;
			    position: absolute;
			    top: 100%;
			    left: 0;
			    width: 12em;
			    z-index: 3000;
			  }

			  #menu .sub-menu, 
			  #menu input[type="checkbox"]:checked + .sub-menu {
			    display: none;
			  }

			  #menu .sub-menu li {
			    border-width: 0 0 0px;
			  }

			  #menu .sub-menu .sub-menu {
			    top: 0;
			    left: 100%;
			  }

			  #menu li:hover > input[type="checkbox"] + .sub-menu {
			    display: block;
			  }
			}

		</style>


		<nav id="menu" class="d-sm-none .d-md-block">
		  <label for="tm" id="toggle-menu">      		
			  	<div class="m-0">
	      		<img src="../../assets/images/logo_laboratorio_texto.png" class="img-logo-mobile img-invert m-0">
				</div>
			<div class="">
				<span class="drop-icon mt-3 mr-4">
					<i class="fas fa-align-justify fa-2x"></i>
				</span>
			</div>	
      			
      	  </label>
		  <input type="checkbox" id="tm">
		  <ul class="main-menu clearfix">

		    <li><a href="../home/inicio.php?pg_id=">Home</a></li>

		    <li><a href="">Quem somos<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label></a>  
	      	  <input type="checkbox" id="sm1">
			      <ul class="sub-menu">
			        	 <hr class="m-0"><li><a target="_self" href="../quem_somos/equipe.php?pg_id=4">Equipe</a></li>
		                 <hr class="m-0"><li><a target="_self" href="../quem_somos/infraestrutura.php?pg_id=5">Infraestrutura</a></li>
		                 <hr class="m-0"><li><a target="_self" href="../quem_somos/parceiros.php?pg_id=6">Parceiros e Financiadores</a></li>
		                 <hr class="m-0"><li><a target="_self" href="../quem_somos/historia_do_lap.php?pg_id=7">História do LAP</a></li>
			      </ul>
		    </li>

			    <li><a href="">Pesquisa<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label></a>
			      	  <input type="checkbox" id="sm2">
				      <ul class="sub-menu">
				        <li><a href="../pesquisa/linhas_de_pesquisa.php?pg_id=8">Linhas de Pesquisa</a></li>
				        <li><a href="../pesquisa/especialidades.php?pg_id=10">Especialidades<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sub-sm2">▾</label></a>
				          <input type="checkbox" id="sub-sm2">
				          <ul class="sub-menu">
					      <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?>
			              <hr class="m-0"><li><a target="_self" href="../pesquisa/especialidade_mod.php?pg_id=<?php echo $linha['pagina_modular_id'] ?>"> <?php echo ($linha["pagina_modular_titulo"]) ?></a></li>
			              <?php } ?>
				          </ul>
				        </li>
				      </ul>
			    </li>

		   		<li><a href="../colecoes/colecoes.php?pg_id=11">Coleções</a></li>

			    <li><a href="">Ensino<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sm3">▾</label></a>  
		      	  <input type="checkbox" id="sm3">
				      <ul class="sub-menu">
				             <li><a class="dropdown-item" target="_self" href="../ensino/pos_graduacao.php?pg_id=12">Pós-Graduação</a></li><hr class="m-0">
				             <li><a class="dropdown-item" target="_self" href="../ensino/iniciao_cientifica.php?pg_id=14">Iniciação Científica</a></li><hr class="m-0">  
				      </ul>
			    </li>

		   			<li><a href="">Produção Acadêmica<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sm4">▾</label></a>
			      	  <input type="checkbox" id="sm4">
				      <ul class="sub-menu">

				        <li><a href="">Arqueologia pré-colonial<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sub-sm4">▾</label></a>
				          <input type="checkbox" id="sub-sm4">
					          <ul class="sub-menu">
					            <li><a 	target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=54">Sambaquis</a></li><hr class="m-0">
					            <li><a  target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=55">Ceramistas</a></li><hr class="m-0">
					            <li><a  target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=56">Paleoíndios</a></li><hr class="m-0">
					            <li><a  target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=65">Outros</a></li><hr class="m-0">
				          	  </ul>
				        </li>
				        <?php while($linha = mysqli_fetch_assoc($consulta_tr3)) { ?>
      					<?php if ( ($linha['pagina_modular_id'] > 56) && ($linha['pagina_modular_id'] < 65) ) { ?> 	
                  			<li><a class="dropdown-item" target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=<?php echo $linha['pagina_modular_id'] ?>"> <?php echo ($linha["pagina_modular_titulo"]) ?></a>
                  			</li><hr class="m-0">
				       	<?php } else { }  ?>  
				        <?php } ?>
				      </ul>
			    	</li>

			    <li><a href="">Difusão do conhecimento<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label></a>  
		      	  <input type="checkbox" id="sm5">
				      <ul class="sub-menu">

				           <li><a href="">Extensão <span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sub-sm5">▾</label></a>
				           <input type="checkbox" id="sub-sm5">
					          <ul class="sub-menu">
                          		<li><a target="_self" href="../difusao_do_conhecimento/projeto_mod.php?pg_id=128">Projetos</a></li><hr class="m-0">
                              	<li><a target="_self" href="../difusao_do_conhecimento/cursos.php?pg_id=13">Cursos</a></li><hr class="m-0">
	                            <li><a target="_self" href="../difusao_do_conhecimento/eventos.php?pg_id=16">Eventos</a></li><hr class="m-0">
				          		</ul>
				           </li>


				           <li><a href="">Divulgação Científica<span class="drop-icon">▾</span><label title="Toggle Drop-down" class="drop-icon" for="sub-sm6">▾</label></a>
				           <input type="checkbox" id="sub-sm6">
					          <ul class="sub-menu">
                        		<li><a  target="_self" href="../difusao_do_conhecimento/lap_nas_midias.php?pg_id=17">LAP nas Mídias</a></li><hr class="m-0">
	                            <li><a  target="_self" href="../difusao_do_conhecimento/redes_sociais.php?pg_id=19">Redes Sociais</a></li>
				          		</ul>
				           </li>

				      </ul>
			    </li>


          		<li><a href="../contato/contato.php?pg_id=18">Contato</a></li>


		  </ul>
		</nav>

<?php
    // Consulta a Tabela Paginas Modulares
    $tr2 = "SELECT * ";
    $tr2 .= "FROM paginas_modulares ";
    $tr2 .= "WHERE pagina_modular_categoria = 'especialidades' ORDER BY pagina_modular_id ASC";
    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("Falha na consulta ao banco Especialidades | Home");   
    }
?>


<?php
    // Consulta a Tabela Paginas Modulares
    $tr3 = "SELECT * ";
    $tr3 .= "FROM paginas_modulares ";
    $tr3 .= "WHERE pagina_modular_categoria = 'producao_academica' ORDER BY pagina_modular_id ASC";
    $consulta_tr3 = mysqli_query($conecta, $tr3);
    if(!$consulta_tr3) {
        die("Falha na consulta ao banco Especialidades | Home");   
    }
?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-left d-none d-sm-block" >
      <div class="navbar-brand d-block d-md-none">
      		<div class="">
      		<img src="../../assets/images/logo_laboratorio_texto.png" class="img-logo-mobile img-invert">	
      		</div>		
      </div>

      <button class="navbar-toggler mr-4" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">

      	<!-- <style type="text/css">
      		 .navbar-toggler-icon {
  			background-image: url('../../assets/images/down-arrow.svg') !important;
  			background-size: 30px 15px;
			}
      	</style> -->

        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center text-left" id="navbarsExample08">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" target="_self" href="../home/inicio.php?pg_id=2">Home</a>
          </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quem somos
                </a>
                    <ul class="dropdown-menu hover-drop " aria-labelledby="navbarDropdown">

						<li><a class="dropdown-item" target="_self" href="../quem_somos/equipe.php?pg_id=4">Equipe</a></li>

                        <!-- <li class="nav-item dropdown">
	                        <a class="dropdown-item  target="_self"dropdown-toggle" href="" id="navbarDropdown1" role="button" data-toggle="dropdown"
	                            aria-haspopup="true" aria-expanded="false">
	                            Equipe
	                        </a>
	                        <ul class="dropdown-menu hover-drop " aria-labelledby="navbarDropdown1">
	                            <li><a class="dropdown-item" target="_self" href="../quem_somos/equipe_atual.php">Equipe atual</a></li><hr class="my-2">
	                            <li><a class="dropdown-item" target="_self" href="../quem_somos/antigos_membros.php">Antigos membros</a></li>
	                        </ul>   
                        </li> -->

                        <hr class="my-2"><li><a class="dropdown-item" target="_self" href="../quem_somos/infraestrutura.php?pg_id=5">Infraestrutura</a></li>

                        <hr class="my-2"><li><a class="dropdown-item" target="_self" href="../quem_somos/parceiros.php?pg_id=6">Parceiros e Financiadores</a></li>

                        <hr class="my-2"><li><a class="dropdown-item" target="_self" href="../quem_somos/historia_do_lap.php?pg_id=7">História do LAP</a></li>
                            
                    </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Pesquisa
                </a>
                    <ul class="dropdown-menu hover-drop " aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item" target="_self" href="../pesquisa/linhas_de_pesquisa.php?pg_id=8">Linhas de Pesquisa</a></li><hr class="my-2">

 
            <li class="nav-item dropdown">
                <a class="dropdown-item dropdown-toggle"  onclick="location.href = '../pesquisa/especialidades.php?pg_id=10'" target="_self" href="../pesquisa/especialidades.php?pg_id=10" id="navbarDropdown1" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Especialidades
                </a>

                <ul class="dropdown-menu hover-drop-2 " aria-labelledby="navbarDropdown3">
                  <?php while($linha = mysqli_fetch_assoc($consulta_tr2)) { ?>
                  <li>
                  <a class="dropdown-item" target="_self" href="../pesquisa/especialidade_mod.php?pg_id=<?php echo $linha['pagina_modular_id'] ?>"> <?php echo ($linha["pagina_modular_titulo"]) ?>
                  </a>
                  </li>
                  <hr class="my-2">
                  <?php } ?>
                </ul> 

              </li>


              </ul>

            </li>


           <li class="nav-item">
            <a class="nav-link" target="_self" href="../colecoes/colecoes.php?pg_id=11">Coleções</a>
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ensino </a>
            <div class="dropdown-menu hover-drop " aria-labelledby="dropdown04">
              <a class="dropdown-item" target="_self" href="../ensino/pos_graduacao.php?pg_id=12">Pós-Graduação</a><hr class="my-2">
              <a class="dropdown-item" target="_self" href="../ensino/iniciao_cientifica.php?pg_id=14">Iniciação Científica</a>
            </div>
          </li>


	<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Produção Acadêmica
    </a>

      <ul class="dropdown-menu hover-drop " aria-labelledby="navbarDropdown">
         
 			<li class="nav-item dropdown">
                <a class="dropdown-item dropdown-toggle" target="_self" href="" id="navbarDropdown1" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                   Arqueologia pré-colonial
                </a>
                <ul class="dropdown-menu hover-drop-2 " aria-labelledby="navbarDropdown3">
                    <li><a class="dropdown-item" target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=54">Sambaquis</a></li><hr class="my-2">
                    <li><a class="dropdown-item" target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=55">Ceramistas</a></li><hr class="my-2">
                    <li><a class="dropdown-item" target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=56">Paleoíndios</a></li><hr class="my-2">
                    <li><a class="dropdown-item" target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=65">Outros</a></li><hr class="my-2">
                </ul>   
            </li><hr class="my-2">

      	<?php while($linha = mysqli_fetch_assoc($consulta_tr3)) { ?>
      	<?php if ( ($linha['pagina_modular_id'] > 56) && ($linha['pagina_modular_id'] < 65) ) { ?> 	
                  <li>
                  <a class="dropdown-item" target="_self" href="../producao_academica/producao_academica_mod.php?pg_id=<?php echo $linha['pagina_modular_id'] ?>"> <?php echo ($linha["pagina_modular_titulo"]) ?>
                  </a>
                  </li>
                  <hr class="my-2">
       	<?php } else { }  ?>  
        <?php } ?>


       </ul>

    </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Difusão do conhecimento
                </a>
                    <ul class="dropdown-menu hover-drop " aria-labelledby="navbarDropdown">

                        <li class="nav-item dropdown">
	                        <a class="dropdown-item dropdown-toggle" target="_self" href="" id="navbarDropdown1" role="button" data-toggle="dropdown"
	                            aria-haspopup="true" aria-expanded="false">
	                            Extensão
	                        </a>
	                        <ul class="dropdown-menu hover-drop-2" aria-labelledby="navbarDropdown3">
	                            <li><a class="dropdown-item" target="_self" href="../difusao_do_conhecimento/projeto_mod.php?pg_id=128">Projetos</a></li><hr class="my-2">
                              <li><a class="dropdown-item" target="_self" href="../difusao_do_conhecimento/cursos.php?pg_id=13">Cursos</a></li><hr class="my-2">
	                            <li><a class="dropdown-item" target="_self" href="../difusao_do_conhecimento/eventos.php?pg_id=16">Eventos</a></li>
	                        </ul>   
                        </li>

                        <hr class="my-2"><li class="nav-item dropdown">
	                        <a class="dropdown-item  dropdown-toggle" target="_self" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
	                            aria-haspopup="true" aria-expanded="false">
	                            Divulgação Científica
	                        </a>
	                        <ul class="dropdown-menu hover-drop-2 " aria-labelledby="navbarDropdown4">
	                            <li><a class="dropdown-item" target="_self" href="../difusao_do_conhecimento/lap_nas_midias.php?pg_id=17">LAP nas Mídias</a></li><hr class="my-2">
	                            <li><a class="dropdown-item" target="_self" href="../difusao_do_conhecimento/redes_sociais.php?pg_id=19">Redes Sociais</a></li>
	                        </ul>   
                        </li>                        

                    </ul>
            </li>


          <li class="nav-item">
            <a class="nav-link" target="_self" href="../contato/contato.php?pg_id=18">Contato</a>
          </li>
        

        </ul>
      </div>
    </nav>

