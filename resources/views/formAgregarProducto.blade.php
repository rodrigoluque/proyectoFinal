@extends('layout/plantilla')

    @section('title', 'Alta de una nueva Marca')


    @section('main')

        @section('h1', 'Alta de un nuevo producto')

        <div class="card bg-light col-md-8 mt-5 p-3 mx-auto">
        <form action="/agregarProducto" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="prdNombre">Nombre del Producto:</label>
                <input type="text" class="form-control  @error('prdNombre') is-invalid @enderror" name="prdNombre"  value="{{ old('prdNombre') }}" id="prdNombre" placeholder="Nombre del Producto">
                @foreach ($errors->get('prdNombre') as $error)
                <div class="alert alert-danger"><li>{{ $error }}</li></div>
              @endforeach
            </div>
          
            <div class="form-group">
            <label for="prdPrecio">Precio:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" name="prdPrecio" value="{{ old('prdPrecio') }}" class="form-control  @error('prdPrecio') is-invalid @enderror " id="prdPrecio" placeholder="0" min="0" step="0">
              
            </div>
         </div>
         @foreach ($errors->get('prdPrecio') as $error)
         <div class="alert alert-danger"><li>{{ $error }}</li></div>
       @endforeach
        
 

            <div class="form-group">
            <label>Marca:</label>
            <select  name="idMarca" class="form-control" required>
                <option>Seleccione una marca</option>
        @foreach ( $marcas as $marca )
                <option value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
        @endforeach
            </select>
            </div>

            <div class="form-group">
            <label>Categoría:</label>
            <select  name="idCategoria" class="form-control" required>
                <option>Seleccione una Categoría</option>
        @foreach( $categorias as $categoria )
                <option value="{{ $categoria->idCategoria }}">{{ $categoria->catNombre }}</option>
        @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="prdPresentacion">Presentación:</label>
            <textarea name="prdPresentacion" class="form-control  @error('prdPresentacion') is-invalid @enderror" id="prdPresentacion">{{ old('prdPresentacion') }}</textarea>
              </div>
              @foreach ($errors->get('prdPresentacion') as $error)
                     <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
              @endforeach
           
            <div class="form-group">
            <label for="prdStock">Stock:</label>
            <input type="number" name="prdStock" value="{{ old('prdStock') }}"class="form-control  @error('prdStock') is-invalid @enderror" id="prdStock" min="0" step="1">
            </div>
            @error('prdStock')
            <div class="alert alert-danger mt-1"><li>{{ $message }}</li></div>
             @enderror

           
           <div class="custom-file">
            <input type="file" name="prdImagen" class="custom-file-input @error('prdImagen') is-invalid @enderror" value="{{ old('prdImagen') }}"  placeholder="Adjuntar imagen.." lang="es">
           <label class="custom-file-label" for="customFileLang">Seleccionar una imagen...</label>
           </div>
            @foreach ($errors->get('prdImagen') as $error)
            <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
           @endforeach



         <a href="/adminProductos" class="btn btn-info mt-2">
          <i class="material-icons"> reply</i>
                 Volver
            </a>

            <button type="submit" class="btn btn-success mt-2">
                 <i class="material-icons"> save </i>
                Agregar
            </button>



           <!-- IMPRIME LOS ERRORES CAPTURADOS POR EL METODO STORE
            
            @if(count($errors))
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
 <br>
    @endsection

