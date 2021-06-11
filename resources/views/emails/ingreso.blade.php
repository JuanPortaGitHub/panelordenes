@component('mail::message')
Hola {{$nuevaorden->cliente['nombre']}}!! Se ha cargado tu orden de trabajo  <b>Nº {{$nuevaorden->ot_id}}</b>!

Podés consultar con los técnicos y saber el estado de la misma haciendo click en el link.

También podes hacerlo ingresando a www.hotspotcomputacion.com/orden/consulta con tu orden y contraseña.

Nuestros horarios son: Lunes a Viernes de 10 a 19hs.

@component('mail::button', ['url' => 'http://hotspotcomputacion.com/orden/estado?_token=BoMWNryTQ1EgqIqLFi1i5kjYMNQR4KWGoPaPe5wH&ot_id='. $nuevaorden->ot_id . '&passwordot=' . $nuevaorden->passwordot])
Ver orden de trabajo
@endcomponent


    -- HotSpot Servicio Técnico --

    Rondeau 189 - (0351) 4220777

    Dr. Achaval Rodriguez 14 - (0351) 4256090

    www.hotspotcomputacion.com
@endcomponent
