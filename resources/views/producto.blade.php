@extends('layout.plantillaInvitados')

    @section('title', 'Producto')

    @section('main')

<div class="container">
    <div class="row">
    <h1 class="col-12 mb-2">Detalle del producto</h1>
    <!-- foto y botones -->
    <section class="col-lg-6 col-md-6">
    <article class="col-lg-12 col-md-12 mb-2">
            <div class="card">
            <img src="/images/productos/{{ $producto->prdImagen }}" class="card-img-top" alt="{{ $producto->prdNombre }}">
        <!--referencias debajo de la foto-->
        <div class="card-body text-center">
            <h3 class="text-primary"><strong> {{ $producto->prdNombre }} </strong></h3>
            <h3 class="text-primary">
                {{ $producto->prdPresentacion }}
                <span class="badge badge-pill danger-color">Nuevo</span>
            </h3>
        </div>
        </div>
        <p></p>
 
    </article> 
    </section>
    <!-- detalle de la derecha -->
    <section class="col-lg-6 col-md-6">
    <article class="col-lg-12 col-md-12 mb-4">
        <h3 class="text-secondary">Detalles del producto</h3>
        <div class="card-body">
            <a href="/producto/{{ $producto->idProducto }}" class="text-primary">
                <h3><strong> {{ $producto->prdNombre }} </strong></h3>
            </a>
            <h3 class="text-primary"> {{ $producto->prdPresentacion }} </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa maiores repudiandae perspiciatis laborum sed, laboriosam tempora ducimus necessitatibus, quo adipisci quia sit esse, dolorum dolores recusandae minima rem nesciunt quod?</p>
            <h4 class="font-weight-bold blue-text">
            <strong>$ {{ $producto->prdPrecio }}</strong>
            </h4>
            <h4>Categoría: <strong class="text-primary">{{ $producto->getCategoria->catNombre }}</strong></h4>
            <h4>Marca: <strong class="text-primary">{{ $producto->getMarca->mkNombre }} </strong></h4>
            <h4>Talles disponibles:</h4>
            <ul>
                <li>SM</li>
                <li>MD</li>
                <li>LG</li>
                <li>XL</li>
            </ul>
        </div>
    </article>
    <!-- botones -->
    <div class="col-12 text-center">
        <a href="/adminCarritoCompras" class="btn btn-outline-dark col-5 m-1" role="buttom" aria-pressed="true">Agregar al carrito</a>
        <button class="btn btn-outline-dark col-5 m-1" type="submit">Comprar ahora</button>
    </div>
    <br>
    <div>      
        <a href="/inicio" class="btn btn-outline-dark col-12 m-1" role="buttom" aria-pressed="true">Volver al Inicio</a>
    </div>
    </section>
    </div>
</div>          

    
 @endsection