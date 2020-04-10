@extends('layout.plantilla')

    @section('title', 'Panel de Productos')

 

    @section('h1', 'Panel de Productos')
    <br>

    @section('main')

      {{-- mensajes de ok --}}
      @if( session()->has('mensaje') )
      <div class="alert alert-success">
          {{ session()->get('mensaje') }}
      </div>
     @endif

   <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered mx-auto">
            <thead class="bg-info">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="/formAgregarProducto" class="btn btn-success">
                        
                        <i class="material-icons">
                            add
                            </i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td >{{ $producto->prdNombre }}</td>
                <td>{{ $producto->prdPrecio }}</td>
                <td>{{ $producto->getMarca->mkNombre }}</td>
                <td>{{ $producto->getCategoria->catNombre }}</td>
                <td>{{ $producto->prdPresentacion }}</td>
                <td>{{ $producto->prdStock }}</td>
                <td><img src="/images/productos/{{ $producto->prdImagen }}" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
                <td>
                    <div class="d-inline"><a href="/formModificarProducto/{{$producto->idProducto}}" class="btn btn-primary ">
                        <i class="material-icons">
                            create   </i>
                    </a></div>
                    <div  class="d-inline">
                    <a href="/formEliminarProducto/{{$producto->idProducto}}" class="btn btn-danger">
                        <i class="material-icons">
                            delete_sweep
                            </i>
                    </a>
                </div>
                </td>
        
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>

   

     <br>   

    @endsection
