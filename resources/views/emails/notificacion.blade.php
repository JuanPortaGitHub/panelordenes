@component('mail::message')
Hola {{$ordenacambiar->cliente['nombre']}}. Se ha actualizado tu orden  <b>Nº {{$ordenacambiar->ot_id}}</b>.

Ingresa al link para ver mas información y consultar lo que necesites.

También podes hacerlo ingresando a www.hotspotcomputacion.com/orden/consulta con tu orden y contraseña.

Nuestros horarios son: Lunes a Viernes de 10 a 19hs.

@component('mail::button', ['url' => 'http://hotspotcomputacion.com/orden/estado?_token=BoMWNryTQ1EgqIqLFi1i5kjYMNQR4KWGoPaPe5wH&ot_id='. $ordenacambiar->ot_id . '&passwordot=' . $ordenacambiar->passwordot])
Ver orden de trabajo
@endcomponent


    --HotSpot Servicio Técnico--

    Rondeau 189 - (0351) 4220777

    Dr. Achaval Rodriguez 14 - (0351) 4256090

    www.hotspotcomputacion.com
@endcomponent
