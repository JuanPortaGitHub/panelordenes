@component('mail::message')
Hola {{$ordenacambiar->cliente['nombre']}}!! Ya está listo el presupuesto de tu equipo orden  <b>Nº {{$ordenacambiar->ot_id}}</b>!

Podés consultar con los técnicos, confirmar y rechazar el presupuesto ingresando en el link.

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
