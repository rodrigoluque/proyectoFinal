@extends('layout.plantilla')

    @section('title', 'Panel de Marcas')
    <br>
    @section('h1', 'Panel de Marcas')

    @section('main')

        {{-- mensajes de ok --}}
        @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif
        <div class="col-md-2 mx-auto"> {{ $marcas->links() }} </div>
        <table class="table table-bordered table-hover table-striped col-md-5 mx-auto">
            <thead class="bg-info">
            <tr>
                <th >id</th>
                <th >Marca</th>
                <th colspan="2">
                    <a href="/formAgregarMarca" class="btn btn-success">
                        <i class="material-icons">
                            add
                            </i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $marcas as $marca )
                <tr>
                    <td> {{$marca->idMarca}}</td>
                    <td>{{$marca->mkNombre}}</td>
                    <td>
                        <a href="/formModificarMarca/{{$marca->idMarca}}" class="btn btn-primary">
                            <i class="material-icons">
                                create   </i>
                        </a>
                        <a href="/formEliminarMarca/{{$marca->idMarca}}" class="btn btn-danger">
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