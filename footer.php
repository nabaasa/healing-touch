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
	<img src="<?= $images_url."barriles_petroleo.jpg";?>" class="footer-petroleogas-img">
	<div class="footer-content">
		<p>
			Si usted tiene dudas.
			<br><br>
			Nosotros tenemos las respuestas.
		</p>
	</div>
</div>
    <?php }?>

<?php
if ( is_page('energia') ) {?>
    <div class="footer-pages">
        <img src="<?= $images_url."energy1.jpg";?>" style="width:100%" class="estilo">
		<div class="footer-content">
			<p>
				Venga con nosotros...
				<br><br>
				Para brindar a su proyecto <br>la ENERGÍA que requiere.
			</p>
		</div>
    </div>
<?php }?>

<?php
    if ( is_page('tecnologia-de-informacion') ) {?>
    <div class="footer-pages" style="position:relative;">
        <img src="<?= $images_url."technology.jpg";?>" style="width:100%" class="estilo">
        <div class="footer-content">
			<p>
				Si busca conectarse <br>con el resto del mundo...
				<br><br>
				Cuente con nosotros <br>para Acesorarlo.
			</p>
		</div>
    </div>
<?php }?>

<?php
if ( is_page('telecom') ) {?>
    <div class="footer-pages" style="height:400px;">
        <img src="<?= $images_url."telecomunicaciones-antenas.jpg";?>" style="width:100%; height:400px;display: block;">
		<div class="footer-content">
			<p>
				Si busca conectarse <br>con el resto del mundo...
				<br><br>
				Cuente con nosotros <br>para Acesorarlo.
			</p>
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
