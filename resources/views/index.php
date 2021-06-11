<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HotSpot Computación</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                      <img src="images/logo.png" id="logo"/>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Inicio</a></li>
							              <li><a href="#service">Servicios</a></li>
                            <li><a href="#repair">Reparaciones</a></li>
                            <li><a href="#reballing">Reballing</a></li>
                            <li><a href="#contact">Contacto</a></li>
                            <li><a href="#payment">Pagos</a></li>
                            <li><a href="/orden/consulta"><b>Consulta Orden</b></a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Servicio Técnico Especializado</h2>
                        <h4>Rápido y Profesional</h4>
                        <p>Trabajamos con personal capacitado. Realizamos presupuestos sin cargo. Contamos con herramientas y equipamiento de alta tecnología. Ofrecemos facilidades de pago en cuotas.</p>
                        <a href="#service" class="da-link button">Más Info</a>
                        <div class="da-img">
                            <img src="images/Slider01.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Servicios de Reballing - Reflow</h2>
                        <h4>Garantía de hasta 1 año</h4>
                        <p>Realizamos trabajos profesionales de resoldado con equipamiento de última tecnología. Brindamos garantía sobre todos nuestros trabajos.</p>
                        <a href="#reballing" class="da-link button">Más Info</a>
                        <div class="da-img">
                            <img src="images/Slider02.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Venta de Insumos e Informática</h2>
                        <h4>Te armamos tu PC a medida</h4>
                        <p>Proveemos todos los insumos necesarios para tu oficina. Contamos con amplia variedad de productos para que realices el armado de tu PC a medida. Contamos con productos gamer.</p>
                        <a href="#contact" class="da-link button">Visitanos</a>
                        <div class="da-img">
                            <img src="images/Slider03.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">

                <div class="title">
                    <h1>¿Qué reparamos?</h1>
          					<h3>Antes que nada, nuestro presupuesto es <strong>SIN CARGO</strong>.</h3>
                    <p>
          						Ofrecemos <strong>servicio técnico</strong> profesional e integral de <strong>notebooks</strong>, <strong>computadoras</strong>, <strong>monitores</strong> e <strong>impresoras</strong> de manera rápida, cómoda y eficiente.
          						Contamos con personal capacitado para la realización de nuestro trabajo.
          					</p>
                </div>
        				<div class="row-fluid">
        					<div class="span4">
        						<div class="centered service">
        							<div class="circle-border zoom-in">
        								<img class="img-circle" src="images/Service1.png" alt="service 1">
        							</div>
        							<h3>Rápida Entrega</h3>
        							<p>Priorizamos una respuesta rápida para la solución de sus problemas</p>
        						</div>
        					</div>
        					<div class="span4">
        						<div class="centered service">
        							<div class="circle-border zoom-in">
        								<img class="img-circle" src="images/Service2.png" alt="service 2" />
        							</div>
        							<h3>Herramientas Profesionales</h3>
        							<p>Utilizamos equipamiento de alta tecnología para la reparación de los equipos</p>
        						</div>
        					</div>
        					<div class="span4">
        						<div class="centered service">
        							<div class="circle-border zoom-in">
        								<img class="img-circle" src="images/Service3.png" alt="service 3">
        							</div>
        							<h3>Pagá en cuotas SIN interés</h3>
        							<p>Ofrecemos facilidades de pago en nuestro local y medios de pago online hasta en 12 cuotas sin interés</p>
        						</div>
        					</div>
        				</div>

            </div>
        </div>

		<div class="section four-section premium-service">
			<div class="container">

				<div class="row-fluid">
					<div class="span1"></div>
					<div class="span3 urgent">
            <div class="row-fluid">
              <div class="span12 centered">
                  <div class="circle-border zoom-in">
                     <img class="img-circle" src="images/Service24.png" alt="service 1">
                  </div>
              </div>
            </div>
					</div>
					<div class="span7">
						<div class="sub-section">
							<div class="title clearfix">
								<div class="pull-left">
									<h3>Servicio de Urgencia - Solución en menos de 24 hs</h3>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<p>Si te dejó de funcionar tu equipo y lo necesitas de manera urgente, ofrecemos un servicio de reinstalación completa
								de tu sistema en menos de 24 horas para que puedas seguir realizando tus tareas lo más pronto posible.</p>
							</div>
						</div>
					</div>
					<div class="span1"></div>
				</div>

      </div>
		</div>

    <div class="section primary-section" id="services">
        <div class="container">
          <div class="title">
              <h1>Servicios</h1>
          </div>
          <div class="row-fluid">
              <div class="span6">
                  <ul class="skills">
                      <li>
                          <p>Servicio técnico de PC, Notebook, Monitores e Impresoras</p>
                      </li>
                      <li>
                          <p>Resoldado de Placas, electrónica de PC y Notebooks</p>
                      </li>
                      <li>
                          <p>Reballing profesional de Chipsets</p>
                      </li>
                      <li>
                          <p>Instalación de redes cableadas e inamlámbricas</p>
                      </li>
                  </ul>
              </div>
              <div class="span6">
                  <img src="images/Services01.jpg">
              </div>
          </div>
          <div class="row-fluid">
              <div class="span6">
                  <img src="images/Services02.jpg">
              </div>
              <div class="span6">
                  <ul class="skills">
                      <li>
                          <p>Asesoramiento comercial informático</p>
                      </li>
                      <li>
                          <p>Instalación de Cámaras y accesos para seguridad y vigilancia</p>
                      </li>
                      <li>
                          <p>Venta de Insumos</p>
                      </li>
                      <li>
                          <p>Armado personalizado y a medida de PC's</p>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>

		<!-- About us section end -->
        <div class="section secondary-section">
            <div class="container centered">
                <p class="large-text">Consulte por trabajos a gremios o empresas. Ofrecemos grandes descuentos.</p>
                <a href="#contact" class="button">Contactanos</a>
            </div>
        </div>
        <!-- Service section end -->

        <!-- About us section start -->
        <div class="section primary-section" id="repair">
            <div class="container">
                <div class="title">
                    <h1>Reparaciones</h1>
                    <p>Los problemas más comunes que podemos encontrarnos son los siguientes:</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4">
                        <div class="thumbnail">
                            <img src="images/repair/pindecarga.jpg" alt="team 1">
                            <h3>Pin de Carga</h3>
                            <div class="mask">
                                <h3>Síntomas</h3>
                                <p>Solo funciona con la batería.</br>No se realiza la carga.</br>Se apaga de forma imprevista.</br>Solo funciona en una determinada posición.</p>
                                <h3>¿Por qué sucede?</h3>
                                <p>Caídas y golpes de la carcaza.</br>Por tirar bruscamente el cable del cargador.</br>Las soldaduras pueden aflojarse por el uso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="thumbnail">
                            <img src="images/repair/bisagras.jpg" alt="team 1">
                            <h3>Bisagras</h3>
                            <div class="mask">
                                <h3>Síntomas:</h3>
                                <p>Mal cierre de la notebook.</br>No se puede abrir correctamente.</p>
                                <h3>¿Por qué sucede?</h3>
                                <p>Caídas y golpes de la carcaza.</br>Se quiebra el agarre con la base de la notebook.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="thumbnail">
                            <img src="images/repair/pantalla.jpg" alt="team 1">
                            <h3>Pantalla</h3>
                            <div class="mask">
                                <h3>Síntomas:</h3>
                                <p>No enciende la pantalla.</br>Se visualizan lineas que no corresponden en la pantalla.</br>Se encuentra rota o quebrada.</br>Pixeles dañados o sin funcionar.</p>
                                <h3>¿Por qué sucede?</h3>
                                <p>Caídas o golpes.</p>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row-fluid team">
                    <div class="span4">
                      <div class="thumbnail">
                          <img src="images/repair/placamadre.jpg" alt="team 1">
                          <h3>Placa Madre</h3>
                          <div class="mask">
                              <h3>Síntomas:</h3>
                              <p>Reinicios repentinos.</br>No enciende la notebook.</p>
                              <h3>¿Por qué sucede?</h3>
                              <p>Es difícil determinar el causante original, ya que puede ser por diferentes motivos como una falla de soldadura o funcionamiento a altas temperaturas.</p>
                          </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="thumbnail">
                          <img src="images/repair/teclado.jpg" alt="team 1">
                          <h3>Teclado</h3>
                          <div class="mask">
                              <h3>Síntomas:</h3>
                              <p>Teclas que no funcionan.</br>Teclas que se mantienen presionadas.</br>Faltante de alguna tecla.</p>
                              <h3>¿Por qué sucede?</h3>
                              <p>Golpes sobre el teclado.</br>Caída de líquidos sobre el teclado.</p>
                          </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="thumbnail">
                          <img src="images/repair/discoduro.jpg" alt="team 1">
                          <h3>Disco Duro</h3>
                          <div class="mask">
                              <h3>Síntomas:</h3>
                              <p>Falta de archivos.No carga el sistema operativo.Reinicios repentinos.</p>
                              <h3>¿Por qué sucede?</h3>
                              <p>Al ser un dipositivo mecánico a lo largo del tiempo pueden producir fallas.</br>El movimiento brusco de la notebook en funcionamiento no es aconsejado para evitar este tipo de problemas.</p>
                          </div>
                      </div>
                    </div>
                </div>
				<div class="row-fluid team">
                    <div class="span4">
                      <div class="thumbnail">
                          <img src="images/repair/cooler.jpg" alt="team 1">
                          <h3>Cooler</h3>
                          <div class="mask">
                              <h3>Síntomas:</h3>
                              <p>Ruído excesivo.</br>El equipo calienta mucho.</br>Se apaga o reinicia a los minutos de encenderse.</br>Se apaga o reinicia cuando se le exige procesamiento.</p>
                              <h3>¿Por qué sucede?</h3>
                              <p>Falta de limpieza.</br>Acumulación de polvo en los conductos de aire.</br>Usar la notebook en temperaturas ambiente elevadas.</p>
                          </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="thumbnail">
                          <img src="images/repair/memoriaram.jpg" alt="team 1">
                          <h3>Memoria Ram</h3>
                          <div class="mask">
                              <h3>Síntomas:</h3>
                              <p>Funciona lento.</br>Reinicios repentinos.</br>No enciende la notebook.</p>
                              <h3>¿Por qué sucede?</h3>
                              <p>Funcionamiento a altas temperaturas.</br>Por fallas en la fabricación.</br>El magnetimos producido por una fuente externa puede estropear su funcionamiento.</p>
                          </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="thumbnail">
                          <img src="images/repair/sistemaoperativo.jpg" alt="team 1">
                          <h3>Sistema Operativo</h3>
                          <div class="mask">
                              <h3>Síntomas:</h3>
                              <p>No inicia el equipo.</br>Reinicios repentinos.</br>Funcionamiento lento.</br>Errores en archivos del sistema.</p>
                              <h3>¿Por qué sucede?</h3>
                              <p>Mala instalación de drivers.</br>Software mal instalado.</br>Virus, spywares o adwares.</p>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section secondary-section">
            <div class="container centered">
                <p class="large-text">Contamos con un amplio stock de repuestos.</br>Dejamos tu Notebook / PC funcionando como nueva.</br>¡Presupuesto Gratuito!</p>
                <a href="#contact" class="button">Visitanos</a>
            </div>
        </div>
        <!-- Client section start -->
        <!-- Reballing section start -->
        <div id="reballing">
            <div class="section primary-section">
                <div class="container">
                    <div class="title">
                        <h1>Servicio de Reballing</h1>
                        <h3>Realizamos diagnóstico <strong>SIN CARGO</strong></h3>
                        <p>Contamos con <strong>laboratorio propio</strong>. Nuestros trabajos se encuentran realizados con las mejores estaciones de Reballing del mercado. Poseen calentadores de aire caliente superior e inferior, con área de precalentado por infrarrojo (IR) que asegura los mejores resultados posibles y el menor estrés a la placa madre del equipo</p>
                    </div>

                    <div class="row-fluid">
                      <div class="span4">
                        <div class="row-fluid">
                          <div class="span12">
                            <div class="testimonial animated fadeInDown">
                                <div class="whopic">
                                  ¿Qué es el Reballing?
                                </div>
                                <div class="arrow"></div>
                                <p>
                                  Las altas temperaturas adentro de tu equipo provocan graves daños en los componentes internos.
                                  </br>Esto sucede cuando se produce una gran exigencia de procesamiento del CPU y del procesador de video, generalmente en aplicaciones de juegos o de diseño, y no se cuenta con una buena ventilación y/o refrigeración.
                                  </br>El funcionamiento prolongado del equipo a altas temperaturas provoca que los integrados electrónicos se desuelden.
                                </br>El mejor método para poder solucionar este problema de desoldado es el denominado 'Reballing' (o Rework).
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="span12">
                              <div class="testimonial animated fadeInDown">
                                  <div class="whopic">
                                    ¿En que consiste el Reballing?
                                  </div>
                                  <div class="arrow"></div>
                                  <p>
                                    El Reballing (o Rework) consiste en acceder a la placa base, localizar el chip sobrecalentado y retirarlo. Colocar de nuevo bolas de estaño, con ayuda de platillas específicas para cada chip y volverla a soldar sobre la placa principal en su posición original utilizando una estación de Rework.
                                  </p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="span4">
                        <div class="row-fluid">
                          <div class="span12">
                            <div class="testimonial animated fadeInDown">
                                <div class="whopic">
                                  ¿Y el Reflow? ¿Cuál es la diferencia?
                                </div>
                                <div class="arrow"></div>
                                <p>
                                  El Reflow consiste en acceder a la placa base del portátil y mediante una pistola de calor, calentar el chip de modo que este se adhiera nuevamente a la placa base. Se suele utilizar como método de diagnóstico.
                                </br>La principal diferencia es que en el Reflow se utiliza el mismo estaño que se encuentra en la placa, de forma que no se asegura una solución consistente y a largo plazo.
                                </p>
                            </div>
                          </div>
                          <div class="testimonial animated fadeInDown">
                            <img src="images/reballing/reballing-01.jpg" alt="brand logo 1">
                          </div>
                        </div>
                      </div>
                      <div class="span4">
                        <div class="row-fluid">
                          <div class="span12">
                            <div class="testimonial animated fadeInDown">
                                <div class="whopic">
                                  ¿Cuáles son los síntomas?
                                </div>
                                <div class="arrow"></div>
                                <div class="list">
                                  <ul>
                                    <li>Se recalienta mucho</li>
                                    <li>La pantalla queda en negro con las luces de fondo encendidas.</li>
                                    <li>La pantalla no enciende y el fan cooler de la laptop está encendido pero suelta aire caliente.</li>
                                    <li>Al momento de prender la computadora hace múltiples pitidos continuos</li>
                                    <li>Estas realizando alguna tarea en tu computadora y la imagen se queda paralizada y luego al encenderla se queda en negro.</li>
                                    <li>Problemas de conexión Bluetooth o WiFi</li>
                                  </ul>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="span12">
                            <div class="testimonial animated fadeInDown">
                                <div class="whopic">
                                  ¿Porqué se produce este problema?
                                </div>
                                <div class="arrow"></div>
                                <p>
                                  En el año 2006 se eliminó el plomo en las soldaduras por considerarlo nocivo para la salud. Se empezó a usar una aleación de estaño, plata y cobre.
                                  Este tipo de aleación de soldadura tiene un fallo importante, su “dureza“. Cuando se expone a altas temperaturas se estresa produciendo grietas en su compuesto que pueden llegar a dejar de hacer contacto.
                                </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="span3 reballing">
                        <div class="row-fluid">
                          <div class="span12 centered">
        						          <div class="circle-border zoom-in">
  							                 <img class="img-circle centered" src="images/Reballing1.png" alt="service 1">
    						              </div>
    					            </div>
                        </div>
                      </div>
                      <div class="span8">
                        <div class="sub-section">
            							<div class="title clearfix">
            								<div class="pull-left">
            									<h3>Dejá tu notebook 0 km. Ofrecemos hasta <strong>12 MESES</strong> de garantía.</h3>
            								</div>
            							</div>
            						</div>
                      </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section third-section">
            <div class="container centered">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Trabajamos todas las marcas:</h3>
                        </div>
                        <ul class="client-nav pull-right">
                            <li id="client-prev"></li>
                            <li id="client-next"></li>
                        </ul>
                    </div>
                    <ul class="row client-slider" id="clint-slider">
                        <li><img src="images/brands/brand-toshiba.png" alt="brand logo 1"></li>
                        <li><img src="images/brands/brand-asus.png" alt="brand logo 2"></li>
                        <li><img src="images/brands/brand-lenovo.png" alt="brand logo 3"></li>
                        <li><img src="images/brands/brand-dell.png" alt="brand logo 4"></li>
                        <li><img src="images/brands/brand-acer.png" alt="brand logo 5"></li>
                        <li><img src="images/brands/brand-samsung.png" alt="brand logo 6"></li>
                        <li><img src="images/brands/brand-hp.png" alt="brand logo 7"></li>
                        <li><img src="images/brands/brand-cx.png" alt="brand logo 8"></li>
                        <li><img src="images/brands/brand-bangho.png" alt="brand logo 9"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact section start -->
        <div id="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contacto</h1>
                        <p>Te estaremos respondiendo a la brevedad.</p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Cargando mapa...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Dejanos tu mensaje</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>¡El mensaje ha sido enviado!</strong><br>Responderemos a la brevedad</div>
                                <div id="errorSend" class="alert alert-error invisible"><strong>Error</strong><br>Intente nuevamente</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="Nombre..." />
                                            <div class="error left-align" id="err-name">Por favor, ingresa tu nombre.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="Email..." />
                                            <div class="error left-align" id="err-email">Por favor, ingresa un email válido.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="Mensaje..."></textarea>
                                            <div class="error left-align" id="err-comment">Por favor, dejanos tu mensaje.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="button">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>Dr. Achaval Rodriguez 14, B° Nueva Córdoba, Córdoba</p>
                        <p>Lunes a Viernes de 10 a 19 hs.</p>
                        <p>hotspotcomputacion@gmail.com</p>
                        <p>0351-4256090</p>
                    </div>
                    <div class="span9 center contact-info">
                        <p>Rondeau 189, B° Nueva Córdoba, Córdoba</p>
                        <p>Lunes a Viernes de 10 a 19 hs.</p>
                        <p>hotspotcomputacion@gmail.com</p>
                        <p>0351-4220777</p>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/HotspotComputacion/" target="_blank">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/hscomputacion" target="_blank">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/109818714044716621449/" target="_blank">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section end -->

		<!-- Payment section start -->
		<div id="payment" class="section four-section">
			<div class="container">
				<div class="row-fluid">
					<div class="span1"></div>
					<div class="span3 payment">
						<div class="row-fluid">
						  <div class="span12 centered">
							  <div class="zoom-in">
								 <img src="images/logo-mercadopago.png">
							  </div>
						  </div>
						</div>
					</div>
					<div class="span7">
						<div class="sub-section">
							<div class="title clearfix">
								<div class="pull-left">
									<h3>Realizar Pagos de Servicios</h3>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<p>
								   HotSpot Computación le ofrece la posibilidad de realizar sus pagos desde su casa.</br>
								   Podes consultar las opciones de pago disponibles desde <a href="https://www.mercadopago.com.ar/promociones" target="_blank">AQUÍ</a>.
								</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div id="payment-form-container">
									<div id="payment-form">
										<div class="control-group">
											<h4>Seleccione el monto:</h4>
											<div class="controls">
												<select class="required pull-left" name="subject" id="payment-amount" style="width: 100px;">
													<option value="-1" selected="selected"> - Elegir -</option>
													<?php
														for($i=4; $i<16; $i++){
															$val = $i * 100;
															echo '<option value="'.$val.'">$ '.$val.'</option>';
														}
													?>
												</select>
												<div id="btn-pago-400" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-f7e520e8-0284-4797-a955-1f605f18f107" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-500" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-46f5a66c-3841-4872-a9c2-f3e65e4a4645" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-600" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-087ecc3c-05d1-4485-9327-f97b473f0e79" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-700" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-ccc19b4c-9332-4de2-8cf4-1d3c6352d6af" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-800" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-f3cf47fc-178b-415b-b0a7-bcc198f8b63b" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-900" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-5d08fa3f-c4a0-40a5-ad50-7880a1ba003b" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-1000" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-7bea5d6a-11a8-4151-8de3-a2ab7ae9197a" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-1100" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-521f11c0-5c4a-4fd0-9ae1-f19497cb9a85" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-1200" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-33524807-b7cb-4554-81a6-654849af7a80" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-1300" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-852d8589-d715-4f8f-8d29-0e843798e30b" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-1400" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-c4b68a3a-bca6-4cb8-bfdd-00cdcb153a42" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<div id="btn-pago-1500" class="pull-left mercadopago" style="display: none;">
													<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=175417370-64ac2564-76de-466c-986f-6f112d852030" name="MP-payButton" class='orange-ar-m-rn-none'>Pagar</a>
												</div>
												<script type="text/javascript">
													(function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}window.$MPBR_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span1"></div>
				</div>
			</div>
		</div>
		<!-- Payment section end -->

        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2015 - HotSpot Computación</p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
    </body>
</html>
