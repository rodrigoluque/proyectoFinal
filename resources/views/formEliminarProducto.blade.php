@extends('layout.plantilla')

    @section('title', 'Formulario de eliminar una Producto')
<br>
    @section('h1', 'Formulario de eliminar una Producto')

    @section('main')

    

    <div class="alert bg-light p-3 col-md-5 mx-auto">
    <h6>¿Esta seguro que quiere eliminar el producto? :  {{ $producto->prdNombre }} </h6>
    
    <div class="card-text-center ml-5" style="width: 18rem;">
        <img class="card-text " src="/images/productos/{{ $producto->prdImagen }}"  alt="Card image cap" style="width:200px; height: 200px; border-color:black;">
        <div class="card-body">
          
        <form action="/eliminarProducto" method="post">
            @csrf
            <input type="hidden" name="idProducto" value="{{ $producto->idProducto }}">
            <a href="/adminProductos" class="btn btn-info">
                <i class="material-icons">
                    reply
                    </i>
                    Volver
                </a>
            <button class="btn btn-danger"><i class="material-icons">
                delete_sweep
                </i> Eliminar</button>
            
      </form>
        </div>
      </div>


    </div>

    @endsection 
