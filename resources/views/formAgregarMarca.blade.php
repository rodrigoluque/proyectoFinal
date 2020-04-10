@extends('layout.plantilla')

    @section('title', 'Formulario de alta una nueva Marca')

    @section('h1', 'Fornulario de alta una nueva Marca')
    <br>
    @section('main')
       <br>
            <div class="alert bg-light p-4 col-md-3 mx-auto">
                <form action="/agregarMarca" method="post">
                    @csrf
                    Nombre:
                    <br>
                    <input type="text" name="mkNombre" class="form-control">
                    @foreach ($errors->get('mkNombre') as $error)
            <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
          @endforeach
                    
         <a href="/adminMarcas" class="btn btn-info mt-1">
            <i class="material-icons"> reply</i>
                   Volver
              </a>
  
              <button type="submit" class="btn btn-success mt-1">
                   <i class="material-icons"> save </i>
                  Agregar
              </button>

                </form>
            </div>

    @endsection
