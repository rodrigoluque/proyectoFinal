@extends('layout/plantilla')

    @section('title', 'Alta de una nueva Marca')

        @section('h1', 'Alta de una nueva categoria')
   <br>
      @section('main')
        <div class="card bg-light col-md-5 mt-5 p-3 mx-auto">
        <form action="/agregarCategoria" method="post" >
            @csrf

            <div class="form-group">
                <label for="catNombre"> Nueva Categoria:</label>
                <input type="text" class="form-control" name="catNombre"  value="{{ old('catNombre') }}" id="catNombre" placeholder="Ingrese nueva categoria">
                @foreach ($errors->get('catNombre') as $error)
                <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
              @endforeach
            </div>
            <a href="/adminCategorias" class="btn btn-info mt-1">
                <i class="material-icons"> reply</i>
                       Volver
                  </a>
      
                  <button type="submit" class="btn btn-success mt-1">
                       <i class="material-icons"> save </i>
                      Agregar
                  </button>

         <!--   @if(count($errors))
                <div class="form-group mt-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif -->

        </form>
        </div>

    @endsection

