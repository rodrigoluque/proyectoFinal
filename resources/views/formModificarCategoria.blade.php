@extends('layout.plantilla')

    @section('title', 'Formulario de modificación de Categoria')

    @section('h1', 'Fornulario de modificación de Categoria')

    @section('main')

    <div class="alert bg-light p-4 col-md-6 mx-auto">
        <form action="/modificarCategoria" method="post">
            @csrf
            <label> Nombre: </label>
           
            <input type="text" name="catNombre" value="{{ $categoria->catNombre }}" class="form-control">
            <input type="hidden" name="idCategoria" value="{{ $categoria->idCategoria}}">
            @foreach ($errors->get('catNombre') as $error)
                <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
              @endforeach
              <a href="/adminCategorias" class="btn btn-info mt-1">
                <i class="material-icons"> reply</i>
                       Volver
                  </a>
      
                  <button type="submit" class="btn btn-success mt-1">
                       <i class="material-icons"> save </i>
                      Modificar
                  </button> 

        </form>

      
    </div>

@endsection