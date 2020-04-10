@extends('layout.plantilla')

    @section('title', 'Formulario de modificación de Marca')
<br>
    @section('h1', 'Fornulario de modificación de Marca')

    @section('main')

            <div class="alert bg-light p-4 col-md-4 mx-auto">
                <form action="/modificarMarca" method="post">
                    @csrf
                    Nombre:
                    <br>
                    <input type="text" name="mkNombre" value="{{ $marca->mkNombre }}" class="form-control">
                    <input type="hidden" name="idMarca" value="{{ $marca->idMarca }}">
                    @foreach ($errors->get('mkNombre') as $error)
                    <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
                  @endforeach
                    <a href="/adminMarcas" class="btn btn-info mt-2">
                        <i class="material-icons"> reply</i>
                               Volver
                          </a>
              
                          <button type="submit" class="btn btn-success mt-2">
                               <i class="material-icons"> save </i>
                              Modificar
                          </button>

                </form>     
            </div>

    @endsection
