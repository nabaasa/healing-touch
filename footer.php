<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Healing Touch
 */
?>
<style>
#divider {
	position : relative;
	top : 0px;
	left : 9px;
	width : 300px;
	text-align : center;
	margin: auto;
	border-bottom : 1px solid #fccc22;
}
#divider2 {
	position : relative;
	top : 0px;
	left : 9px;
	width : 50px;
	text-align : center;
	margin: auto;
	border-bottom : 1px solid #fccc22;
}
#divider3 {
	position : relative;
	top : 30px;
	left : 9px;
	width : 250px;
	text-align : center;
	margin: auto;
	border-bottom : 1px solid #ffffff;
}
.h22{
	text-align: center;

}
.address{
	text-align: center;
	color: #ffffff;
}

/*logos redes sociales*/

.column {
    float: left;
    position: relative;
    width: 5%;

    /*for demo purposes only */
    /*background: #f2f2f2;*/
    border: 0px solid #e6e6e6;
    box-sizing: border-box;
}

.column-offset-1 {
    left: 43%;
}
.column-offset-2 {
    left: 43%;
}
.column-offset-3 {
    left: 60%;
}
.column-offset-4 {
    left: 40%;
}

.column-inset-1 {
    left: 43%;
}
.column-inset-2 {
    left: -40%;
}
.column-inset-3 {
    left: -60%;
}
.column-inset-4 {
    left: -80%;
}
.credits{
	text-align: center;
	color: #ffffff;
	margin-top: 40px;
}

</style>


<?php
$images_url = get_stylesheet_directory_uri().'/assets/images/';
if (is_front_page()){?>

    <div class="footer-main">
		<div class="footer-content">
			<p>
				Si usted tiene dudas.
				<br><br>
				Nosotros tenemos las respuestas.
			</p>
		</div>
    </div>
    <img src="<?= $images_url."cpu_image.jpg";?>" style="width:100%; background-color:#38aee6;" class="estilo">

<?php }?>

<?php
    if ( is_page('petroleogas') ) {?>
<div class="footer-pages">
	<img src="<?= $images_url."barriles_petroleo.jpg";?>">
	<div class="footer-content">
		<h4 class="title">Si usted tiene dudas...</h4>
		<h4 class="sub-title">Nosotros tenemos las respuestas.</h4>
	</div>
</div>
    <?php }?>

<?php
if ( is_page('energia') ) {?>
    <div class="footer-pages">
        <img src="<?= $images_url."energy1.jpg";?>">
		<div class="footer-content">
			<h4 class="title">Venga con nosotros...</h4>
			<h4 class="sub-title">Para brindar a su proyecto la ENERGÍA que requiere.</h4>
		</div>
    </div>
<?php }?>

<?php
    if ( is_page('tecnologia-de-informacion') ) {?>
    <div class="footer-pages" style="position:relative;">
        <img src="<?= $images_url."technology.jpg";?>">
        <div class="footer-content">
			<h4 class="title">Si busca conectarse con el resto del mundo...</h4>
			<h4 class="sub-title">Cuente con nosotros para Asesorarlo.</h4>
		</div>
    </div>
<?php }?>

<?php
if ( is_page('telecom') ) {?>
	<div class="telecom-pre-footer" style="display: none;">
		<h2>Nuestras Ofertas de Servicio</h2>
		<div class="left">
			<h4 class="title">Optimizacion de la Red – Drive Test</h4>
			<div class="content">	
				Con un sitio en el aire, es necesario comprobar el rendimiento del nuevo sitio. Esto se hace a través de pruebas de unidades de verificación. Los sitio se comprueban para la validación de los parámetros de integración y desempeño de la llamada de controlar: la terminación de llamadas, originación de llamadas, transferencia, control de potencia RX, calidad y nivel de RX, etc. Optimización de paramétrico – Una vez que una red de radio está en funcionamiento, su rendimiento es monitoreado. El rendimiento se compara con indicaciones clave de rendimiento (KPI) elegidos. Después de parámetros de radio de ajuste, los resultados se aplican a la red para lograr el rendimiento deseado. El foco principal de optimización de la red de radio está en áreas tales como el control de potencia, calidad, entregas, tráfico de abonados y la disponibilidad de recursos (y el acceso) mediciones. periódicas de seguimiento y optimización de la red en vivo durante todo el ciclo de vida de la red – El monitoreo regular del estado de la red (nueva implantación y expansión) haciendo pruebas de la unidad y el mantenimiento de KPI.	
			</div>
		</div>
		<div class="right">
			<h4 class="title">Auditoria de Red, evaluacion comparativa y planificacion de IBS y Diseño</h4>			
			<div class="content">
				Auditoría de las instalaciones es un proceso que identifica las discrepancias entre el diseño y la red implementada.
Bechmarking Servicios – servicios de referencia es un análisis comparativo global que proporciona detalles sobre el analisis de mercado y la opinión en la red. El servicio evalúa el rendimiento frente a la competencia y las medidas de rendimiento de la red utilizando una prueba de manejo para examinar la cobertura y calidad de la llamada. Las pruebas se llevaron a cabo sobre la disponibilidad de llamada, calidad de llamada, establecimiento de llamada, tasa de éxito y tasa de éxito de traspaso. IBS – Un sistema de cobertura es deficiente a partir de células fuera del edificio, lo que lleva a la mala calidad, una solución puede ser la construcción de un sistema de cubierta. El objetivo de la planificación de células de interior es, como para la planificación de células tradicional, para planificar una buena cobertura y capacidad, y al mismo tiempo interferir lo menos posible.
			</div>
		</div>
		<div class="bottom">
			<h4 class="title">Planificación y Optimización Centro Virtual</h4>
			<div class="content">
				Un concepto único de una combinación de modelo interno y externo para llevar a cabo la planificación y optimización de redes inalámbricas.
	Proporciona beneficios como bajos costos fijos, independientemente de la ubicación del proyecto, ciclo de entrega rápida y el despliegue rápido de los proyectos, paquetes de servicios rentable y flexible para satisfacer las necesidades únicas de los clientes.
			</div>
		</div>
	</div>
    <div class="footer-pages">
        <img src="<?= $images_url."telecomunicaciones-antenas.jpg";?>">
		<div class="footer-content">
			<h4 class="title">Si busca conectarse con el resto del mundo...</h4>
			<h4 class="sub-title">Cuente con nosotros para asesorarlo.</h4>			
		</div>
    </div>
<?php }?>


<footer id="footer">
  <div class="site-aligner">
    <div class="widget-column">
      <div class="cols">
      <img src="<?= $images_url."Tek_Innova_LOGO-Bl_small.png";?>">
      <div id="divider">&nbsp;</div>
     	<h2 class="h22">CONTACTO</h2>
     	<p class="address">Bahia de las Palmas #33, Interior 102, Colonia Veronica Anzures<br>
     	Delegacion Miguel Hidalgo, CP 11300, CD MX<br>
     	+52 1 3330 3770<br>
        </p><p style="font-size: 16px" class="address"> info @ tek-innova.com</p>
     	<div id="divider2">&nbsp;</div>
     	&nbsp;
     	<div class="container">
          <div class="column column-one column-offset-2"><img src="<?= $images_url."Face_blanco.png";?>"></div>
          <div class="column column-two column-inset-1"><img src="<?= $images_url."Correo_blanco.png";?>"></div>
          <div class="column column-three column-offset-1"><img src="<?= $images_url."Twitter_blanco.png";?>"></div>
        </div>

     	<div id="sociallogos-"></div>
     	<div id="divider3">&nbsp;</div>
     	<p class="credits">Desarrollo Tek INNOVA </p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
</footer>
<div id="contacto""></div>
<?php wp_footer(); ?>
</body></html>
