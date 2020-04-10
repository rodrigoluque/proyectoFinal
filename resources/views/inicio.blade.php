@extends('layout.plantillaInvitados')

    @section('title', 'Inicio')

    @section('main')

<!-- INICIO SLIDER -->
<div class="navspacer p-4"></div> <!-- Separador para que no tape el fixed-top -->
<!--carrusel-->
<div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Camperas1b.jpg" class="d-block w-100" alt="first slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sacos de calidad</h5>
                <p>Sacos super cancheras temporada otoño-invierno 2020.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Camperas2b.jpg" class="d-block w-100" alt="second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sobretodos</h5>
                <p>Amplia variedad de productos.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Camperas3b.jpg" class="d-block w-100" alt="third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sentite comoda, sentite amada</h5>
                <p>Excelente calidad y precio.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<!--segundo navbar para las categorías-->
<main>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light mdb-color lighten-3 mt-3 mb-5">
        <span class="navbar-brand">Categorías de Productos:</span>
        <!-- botón hamburguesa en collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- los links de las categorías -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Sacos
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Blazers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Chalecos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Varios</a>
                </li>
            </ul>
            <!-- boton para buscar-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Que producto desea?" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
<!-- FIN SLIDER -->

 <!-- INICIO SECCIÓN DE PRODUCTOS -->
       <!-- mb : margin bottom 4 = 1,5rem -->
       <section class="text-center mb-4">
        <div class="row">
        <!-- grid responsive. 3 col en large de 993px, 4 col en medium de 768px,  -->
        <?php foreach($productos as $producto):?>
        <article class="col-lg-3 col-md-6 mb-4">
            <!-- van los artículos -->
            <div class="card">
              <a href="/producto/<?= $producto['idProducto'];?>">  
                <img src="images/productos/<?= $producto['prdImagen']?>" class="card-img-top" alt="">
              </a>
            <!--textos del artículo-->
            <div class="card-body text-center">
                <a href="/producto/<?= $producto['idProducto'];?>" class="grey-text">
                    <h5><?= $producto['prdNombre'];?></h5>
                </a>
                <h5>
                    <strong>
                        <a href="/producto/<?= $producto['idProducto'];?>" class="dark-grey-text"><?= $producto['prdPresentacion'];?>
                        <span class="badge badge-pill danger-color">Nuevo</span>
                        </a>
                    </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                    <strong>$ <?= $producto['prdPrecio'];?></strong>
                </h4>
            </div>
            </div>
        </article>    
        <?php endforeach;?>
        </div>
    </section>
    <!-- paginación por 8 productos-->
     <nav class="d-flex justify-content-center wow fadeIn">
      {{ $productos->links() }}
    </nav>
    </div>
    <!-- cierro el container de sección artículos -->
</main>
 <!-- FIN SECCIÓN DE PRODUCTOS -->

 @endsection