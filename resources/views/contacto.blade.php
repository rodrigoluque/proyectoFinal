
@extends('layout.plantillaInvitados')

@section('title', 'Home')



@section('main')


   






<!-- Inicio Formulario de Contacto -->
</div><!-- Fin Container 1:NAV-->

<div class="container" style="background-color:#e08cd9;margin-top: 65px;" > <!-- Inicio Container 2:TABLE -->  
<div class="row"> <!-- Inicio Fila 1-->
    <div class="col-md-12 font-weight-bold mt-2" style="color:#ffffff;font-family: 'Indie Flower', cursive;"> Comunicate con nosotros!</div>
    <div class="col-md-12 font-weight-normal" style="color:#ffffff;font-family: 'Indie Flower', cursive;">Compartí tu opinión, sugerencia o inquietudes con nosotros a través de nuestros canales de comunicación de lunes a viernes de 9:00 a 18:00 hs.</div>
    <div class="col-md-6 font-weight-normal"  style="color:#ffffff"><i class="fab fa-whatsapp"></i> Telefono/Whatsapp: 115 485 1179 </div>
    <div class="col-md-6 font-weight-normal"  style="color:#ffffff"><i class="fas fa-paper-plane"></i> Email: info@camperas.com.ar</div>
</div> <!-- Fin Fila 1--> 

<div class="row" >
<div class="col-md-12">

<form class="mt-3 mb-3">
<div class="form-row alert alert-primary" role="alert" style="background-color:#911AA6; color:#ffffff;border-color:#911AA6;">
<h4><strong class="font-weight-bold" style="font-family: 'Indie Flower', cursive;">Envianos un mensaje <i class="fas fa-envelope-open-text"></i></strong></h4> 
</div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label class="font-weight-bold" for="inputNombre" style="color:#ffffff" >Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required>
    </div>

    <div class="form-group col-md-6">
      <label class="font-weight-bold" for="inputApellido" style="color:#ffffff">Apellido</label>
      <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" required>
    </div>

</div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" for="inputEmail" style="color:#ffffff">E-mail</label>
      <input type="email"  class="form-control" id="email" placeholder="Ingrese E-mail" required>
    </div>

    <div class="form-group col-md-6">
      <label class="font-weight-bold" for="inputTelefono" style="color:#ffffff">Celular / Whatsapp</label>
      <input type="tel" pattern="[0-9]{10}" class="form-control" id="telefono" placeholder="Ingrese celular" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-12">
    <label class="font-weight-bold" for="inputMensaje" style="color:#ffffff">Mensaje</label>
    <textarea class="form-control" id="mensaje" rows="3" placeholder="Ingrese su consulta"></textarea>
  </div>
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>
</div>  <!-- Fin Container 2:TABLE -->  

</div><!-- Fin Container --> 
<!-- Fin Formulario de Contacto -->

@endsection
