@extends('layout.plantilla')

    @section('title', 'Formulario de modificación de un producto')

    <br>

    @section('h1', 'Formulario de modificación de un producto')

    @section('main')

<!-- #Para imprimir todos los errores#
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul> -->




            <div class="card bg-light col-md-5 mt-3 p-3 mx-auto"">
                <form action="/modificarProducto" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <label>Nombre:</label>
                <input type="text" name="prdNombre" value="{{ old("prdNombre") }}"  placeholder="{{$producto->prdNombre}}" class="form-control  @error('prdNombre') is-invalid @enderror">
                    @foreach ($errors->get('prdNombre') as $error)
                    
                        <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
                    
                    @endforeach

                  
                    <div class="form-group">
                    <label for="prdPrecio">Precio:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                        <input type="number" name="prdPrecio" value="{{ old('prdPrecio') }}" placeholder="{{$producto->prdPrecio}}" class="form-control  @error('prdPrecio') is-invalid @enderror"" id="prdPrecio" placeholder="0" min="0" step="0">
                       </div>
                        </div> 
                        @error('prdPrecio')
                        <div class="alert alert-danger mt-1"><li>{{ $message }}</li></div>
                        @enderror
                                         
                    <div class="form-group">
                        <label>Marca:</label>
                        <select name="idMarca" class="form-control " required>
                            <option value="">Seleccione marca...</option>
                    @foreach ( $marcas as $marca )
                            <option value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
                    @endforeach
                        </select>
                        </div>

                  <!--  <input type="text" name="idCategoria" value="{{ $producto->idCategoria }}" class="form-control"> -->
                   
                    <div class="form-group">
                        <label>Categoría:</label>
                        <select name="idCategoria" class="form-control" required>
                            <option value="">Seleccione una Categoría</option>
                    @foreach( $categorias as $categoria )
                            <option value="{{ $categoria->idCategoria }}">{{ $categoria->catNombre }}</option>
                    @endforeach
                        </select>
                        </div>

                     <label>Presentación:</label>
                    <input type="text" name="prdPresentacion" value="{{ old('prdPresentacion')}}" placeholder="{{ $producto->prdPresentacion }}" class="form-control @error('prdPresentacion') is-invalid @enderror">
                  

                    @foreach ($errors->get('prdPresentacion') as $error)
                    
                        <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
                    
                    @endforeach

                    <label>Stock:</label>
                    <input type="text" name="prdStock" value="{{ old('prdStock') }}"  placeholder="{{ $producto->prdStock }}" class="form-control @error('prdStock') is-invalid @enderror">
                    @error('prdStock')
                    <div class="alert alert-danger mt-1"><li>{{ $message }}</li></div>
                    @enderror

                   <label>Imagen:</label>
                 
                    <div class="custom-file">
                        <input type="file" name="prdImagen" class="custom-file-input @error('prdImagen') is-invalid @enderror" value="{{ old('prdImagen') }}"  placeholder="{{ $producto->prdImagen }}" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar una imagen...</label>
                      </div>
                      @foreach ($errors->get('prdImagen') as $error)
                      <div class="alert alert-danger mt-1"><li>{{ $error }}</li></div>
                      @endforeach
  

                    <input type="hidden" name="idProducto" value="{{ $producto->idProducto }}">
                    
                    <a href="/adminProductos" class="btn btn-info mt-2">
                        <i class="material-icons"> reply</i>
                               Volver
                          </a>

                    <button type="submit" class="btn btn-success mt-2">
                        <i class="material-icons"> save </i>
                      Modificar
                   </button>
       
                </form>
            </div>
            <br>

    @endsection