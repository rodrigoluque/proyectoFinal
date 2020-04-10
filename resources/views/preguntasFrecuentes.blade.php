@extends('layout.plantillaInvitados')

    @section('title', 'preguntasFrecuentes')



    @section('main')


    <div class="container mt-5">
        <br>
<div class="navspacer p-4 mt-3">
<h1>Preguntas Frecuentes</h1>
    <details>
        <summary>¿Cómo se realiza un pedido?</summary>
        <p>Para realizar un pedido de compra, es muy fácil, una vez en la página del producto deseado, tienes que: <br>
        <ul>
            <li>Hacer clic en "Añadir al carrito" y elegir la opción "Pagar Mi Pedido".</li>
            <li>En la página siguiente hacer clic en "Pagar".</li>
            <li>Si no tienes cuenta, elije la opción "Crea una cuenta" y rellena todos los datos, acepta los términos y condiciones y haz clic en "OK".</li>
            <li>En el paso siguiente, tienes que rellenar todos los datos restantes.</li>
            <li>Acepta los términos y condiciones y elije el medio de pago.</li>
            <li>Finalmente, recibirás un e-mail de confirmación de tu pedido.</li>
        </ul>
        </p>
    </details>
    <details>
        <summary>¿Cómo estoy seguro de que mi pedido ha sido recibido?</summary>
        <p>Te enviaremos un email de confirmación para validarlo. También podes ingresar en tu cuenta y revisar el estado de los pedidos.</p>
    </details>
    <details>
        <summary>¿Cómo sé cuál es el estado de mi pedido?</summary>
        <p>Al ingresar en tu cuenta podes visualizar tus pedidos, con la siguiente información:<br>
            - Número de pedido<br>
            - Fecha estimada de entrega<br>
            - Estado del envío:<br>
            <ul>
                - Pendiente <br>
                - En curso <br>
                - Enviado <br>
                - Entregado / Devuelto <br>
            </ul>
        </p>
    </details>
    <details>
        <summary>No tengo información actualizada del estado del pedido.</summary>
        <p>Puedes ponerte en contacto con nosotros a través del link de <a href="Index.html">Contacto</a><br>
            Es improtante que menciones el número de pedido y datos de usuario de la cuenta.</p>
    </details>
    <details>
        <summary>Olvidé mi contraseña, ¿cómo la recupero?</summary>
        <p>Tienes que ingresar nuevamente en Inicio y solicitar una nueva contraseña. La misma te llegará vía email registrado en la apertura de la cuenta.</p>
    </details>
    <details>
        <summary>¿Puedo cambiar la dirección de envío?</summary>
        <p>Si deseas cambiar la dirección de entrega antes de la expedición del pedido, ponte inmediatamente en contacto con nuestro servicio de atención al cliente o al link de <a href="Index.html">Contacto</a>. Si el pedido ha sido enviado antes del cambio de dirección, el cambio debe hacerse directamente poniéndose en contacto con el transportista.
        </p>
    </details>
</div>
</div>
<br><br><br>


@endsection















