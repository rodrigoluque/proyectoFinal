@extends('layout.plantilla')

    @section('title', 'Panel de Categorías')
<br>
    @section('h1', 'Panel de Categorías')

    @section('main')


     {{-- mensajes de ok --}}
     @if( session()->has('mensaje') )
     <div class="alert alert-success">
         {{ session()->get('mensaje') }}
     </div>
 @endif


 <div class="col-md-2 mx-auto"> {{ $categorias->links() }} </div>
 
        <table class="table table-bordered table-hover table-striped col-md-6 mx-auto">
            <thead class="bg-info">
            <tr>
                <th >id</th>
                <th >Categoria</th>
                <th colspan="2">
                    <a href="/formAgregarCategoria" class="btn btn-success"> <i class="material-icons">
                        add
                        </i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $categorias as $categoria )
                <tr>
                    <td  >{{$categoria->idCategoria}}</td>
                    <td >{{$categoria->catNombre}}</td>
                    <td >
                        <a href="/formModificarCategoria/{{$categoria->idCategoria}}" class="btn btn-primary">
                            <i class="material-icons">
                                create   </i>
                        </a>
                        <a href="/formEliminarCategoria/{{$categoria->idCategoria}}" class="btn btn-danger">
                            <i class="material-icons">
                                delete_sweep
                                </i>
                        </a>
                    </td>
                  
                </tr>
            @endforeach
            </tbody>
        </table>

        <br>
    @endsection
