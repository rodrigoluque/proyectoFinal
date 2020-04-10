@extends('layout.plantillaInvitados')

@section('title', 'Home')



@section('main')


<div class="container"> <!-- Inicio Container 1: NAV-->
    
    </div>  <!-- FIN Container 1: NAV-->
  
    
<div class="container" style="background-color:#ffffff;margin-top: 65px;"> <!--Inicio Container 2: TABLE-->

     <div class="alert alert-success" role="alert" style="font-family: 'Indie Flower', cursive;">
         <strong> Campera se agregó a tu carrito.</strong>  
          </div>    

<div class="row "><!--Inicio 1ra Fila -->

    <div class="col-md-8 table-responsive-md">
    
        <table class="table">
            <thead>
              <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="img/camperaCompra1.jpg" width="60" height="70" alt="">
                    <p>Campera1</p>
                    <p>Talle: M</p>
                </td>
                
                <td>$1550,00</td>
                <td>1</td>
                <td>$1550,00</td>
              </tr>

              <tr>
                <td><img src="img/camperaCompra2.jpg" width="60" height="70"alt="">
                    <p>Campera2</p>
                    <p>Talle: S</p>
                </td>

                <td>$2000,00</td>
                <td>4</td>
                <td>$8000,00</td>
              </tr>
              
              <tr>
                <td><img src="img/camperaCompra3.jpg" width="60" height="70"alt="">
                    <p>Campera3</p>
                    <p>Talle: M</p>
                </td>
                <td>$3300,00</td>
                <td>2</td>
                <td>$6600,00</td>
              </tr>
            </tbody>
          </table>

</div>

<div class="col-md-4 table-responsive-md" >
    <table class="table" style="border:solid;border-width: 1px;">
        <tbody>
          <tr>
            <td>¿Tenés descuento?</td>
            <td></td>
          </tr>
          <tr>
            <td>Subtotal</td>
            <td>$16150,00</td>
          </tr>
          <tr>
            <td>Total General</td>
            <td>$16150,00</td>
          </tr>
          
        </tbody>
      </table>
      <button type="button" class="btn btn-success btn-lg mb-2 btn-block">Comprar</button>

</div>
    

</div><!--Fin 1ra Fila -->


<div class="row"></div>


</div> <!--Fin Container 2: TABLE-->



@endsection
