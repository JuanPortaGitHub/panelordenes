@component('mail::message')
Hola {{$ordenacambiar->cliente['nombre']}}. Tu equipo orden  <b>Nº {{$ordenacambiar->ot_id}}</b> está listo para ser retirado.

Ingresa al link para ver mas información y consultar lo que necesites.

También podes hacerlo ingresando a www.hotspotcomputacion.com/estadodeorden con tu orden y contraseña.

Nuestros horarios son Lunes a Viernes de 10 a 14 y 19 a 21hs.

@component('mail::button', ['url' => 'http://panelordenes.test/consultaorden?_token=USn1t3NlXjX7YyLlbvVoZcegSprxBMDKCLLSxOXf&ot_id='. $ordenacambiar->ot_id . '&passwordot=' . $ordenacambiar->passwordot])
Ver orden de trabajo
@endcomponent


    --HotSpot Servicio Técnico--

    Rondeau 189 - (0351) 4220777

    Dr. Achaval Rodriguez 14 - (0351) 4256090

    www.hotspotcomputacion.com
@endcomponent
