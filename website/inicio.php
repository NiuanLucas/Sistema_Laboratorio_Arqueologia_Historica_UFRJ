
<?php require_once "header.php";  ?>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
<main class="container">

  <div class="container text-justify mt-3 mb-3 ">
        <div class="row">

          <div class="col-sm-6" style="background-color: rgb(70,30,10) !important;">
            <h1 class="text-white"><b><?php echo $dados_pagina_fixa["pagina_titulo"];?></b></h1>
            <p class="" style="color: red !important;">
            <?php echo base64_decode($dados_pagina_fixa["pagina_conteudo"]); ?>	</p>
          </div>

          <div class="col-sm-6" style="background-color:rgb(70,30,10) !important;">
            <img 
            class="d-block ml-sm-3" 
            style="width: auto !important; height: 100% !important;" 
            src="../dashboard/dados/<?php echo $dados_pagina_fixa["pagina_imagem_capa"];?>"
            >
          </div>
          
        </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-lah">Notícias</strong>
          <h3 class="mb-0">Evento no Museu</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">	Viverra quam placerat potenti curae duis ultricies dui, vehicula ut dapibus urna. </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-card-2" src="../dashboard/dados/images_capas/image%20(1).jpg" >
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-lah">Pesquisa</strong>
          <h3 class="mb-0">Nova pesquisa encontrada</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">	Donec tincidunt commodo mi hendrerit dui sed gravida, turpis malesuada felis viverra integer. </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-card-2" src="../dashboard/dados/images_capas/image%20(2).jpg" >
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-lah">Mundo</strong>
          <h3 class="mb-0">Descoberta científica </h3>
          <div class="mb-1 text-muted">Nov 13</div>
          <p class="card-text mb-auto">	Netus cubilia tempus lacus ultrices id cras tincidunt, neque congue lorem tincidunt orci. </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-card-2" src="../dashboard/dados/images_capas/image%20(3).jpg" >
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-lah">Extras</strong>
          <h3 class="mb-0">Curiosidades</h3>
          <div class="mb-1 text-muted">Nov 14</div>
          <p class="mb-auto">	Sed commodo aliquet nisi nisl at pellentesque vel, dapibus sollicitudin eu bibendum pulvinar. </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-card-2" src="../dashboard/dados/images_capas/image%20(4).jpg" >
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-2 mb-4 fst-italic border-bottom">
        Introdução
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Titulo 1</h2>
        <p>	Eu class feugiat leo metus purus curabitur integer, volutpat venenatis adipiscing mi ullamcorper placerat, ipsum augue fusce aliquam eu primis. 
        etiam per cras aliquam diam tempus sollicitudin commodo ac feugiat, torquent luctus ac senectus aliquet laoreet et nulla, 
        ad a risus dolor facilisis egestas cras viverra. donec id risus urna eu felis elementum, eleifend sit etiam in justo, vestibulum etiam suscipit ultrices fermentum.
        Et fermentum ornare accumsan curae lobortis tristique justo vivamus, fames tempor at quisque tortor pharetra et iaculis mauris, eget curabitur 
        magna in curabitur erat sem. varius libero blandit 
        auctor sapien ac euismod justo, consectetur habitant consequat ullamcorper hendrerit. congue quam placerat. </br></br>

        </p><hr>

        <h2>Titulo 2</h2>
        <p>	Sagittis venenatis nibh sodales faucibus quam facilisis cursus vulputate egestas, augue nullam sem eleifend molestie inceptos class auctor,
           commodo nunc tellus hac commodo mauris amet nisi.
           nisl habitant at curabitur metus arcu, phasellus suspendisse bibendum enim, eget nunc vitae est. </p>

      </article>
      
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">

        <div class="p-4">
          <h4 class="fst-italic"> <i class="fas fa-sitemap"></i> Mapa do site </h4>
          <ol class="list-unstyled">
            <li><a href="../inicio.php?pg_id=">Inicio</a></li>
            <li><a href="../colecoes/colecoes.php?pg_id=11">Arqueologia Histórica no Brasil</a></li>
            <li><a href="../contato/contato.php?pg_id=18">Pessoas</a></li>
            <li><a href="#">Infraestrutura</a></li>
            <li><a href="#">Pesquisas</a></li>
            <li><a href="#">Notícias</a></li>
            <li><a href="#">SAHIST</a></li>
            <li><a href="#">Instituições parceiras e financiadoras</a></li>
            <li><a href="#">Links uteis</a></li>
            <li><a href="#">Contato</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>



<?php require_once "footer.php";  ?>