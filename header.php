<?php $images_url = get_stylesheet_directory_uri().'/assets/images/';?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
	<div id="wrapper">
    	<!-- <div class="header">-->
		<div class="<?php if ( is_front_page() ){ echo "header";} else { echo "headerwhite"; }?>">
    		<div class="site-aligner">
            	<div class="logo">
				<?php
    				if ( is_front_page() ) {?>
    	                <img src="<?= $images_url;?>Tek_Innova_LOGO-Bl.png">
    	            <?php }
    				else if ( is_page('petroleogas') ) {?>
    					<img src="<?= $images_url;?>logos/Tek_Innova_LOGO-GRIS_.png">
    				<?php }
    				else if ( is_page('energia') ) { ?>
    					<img src="http://www.tek-innova.com/wp-content/uploads/2017/02/Tek_Innova_LOGO-VERDE_.png">
    				<?php }
    				else if ( is_page('telecom') ) { ?>
    					<img src="http://www.tek-innova.com/wp-content/uploads/2017/02/Tek_Innova_LOGO-AZUL_.png">
    				<?php }
    				else if ( is_page('Tecnologías de Información') ) { ?>
    					<img src="http://www.tek-innova.com/wp-content/uploads/2017/02/Tek_Innova_LOGO-MORADO_.png">
    				<?php } ?>
                	<h2><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php
						$site_nav_class = 'site-nav';
						if(is_page('petroleogas'))
							$site_nav_class = 'site-nav-grey';
						if(is_page('energia'))
							$site_nav_class = 'site-nav-green';
						if(is_page('telecom'))
							$site_nav_class = 'site-nav-blue';
						if(is_page('tecnologia-de-informacion'))
							$site_nav_class = 'site-nav-violet';
					?>
                    <div class="<?=$site_nav_class;?>" style="display:block !important;">
        				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        			</div><!-- site-nav -->
                </div><!-- logo -->
                <!-- <div class="mobile_nav"><a href="www.tek-innova.com"><?php // _e('Tek-Innova','healing-touch'); ?></a></div>-->
                <div class="clear"></div>
            </div><!-- site-aligner -->
    	</div><!-- header -->
    </div>

	<?php if ( is_home() || is_front_page() ) {?>
    <?php if( get_theme_mod( 'hide_slider' ) == '') { ?>
        <section id="home_slider">
        	<?php
			$sldimages = '';
			$slAr = array();
			$m = 0;
			for ($i=1; $i<6; $i++) {
                $imgSrc = get_theme_mod('slide_image'.$i);
                if($imgSrc !== false){
                    if ( strlen($imgSrc) > 3 ) {
                        $slAr[$m]['image_src'] = $imgSrc;
                        $m++;
                    }
                }
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
	                <?php
	                foreach( $slAr as $sv ){
	                    $image_src = isset($sv['image_src'])?$sv['image_src']:"";
	                    $image_title = isset($sv['image_title'])?$sv['image_title']:"";
	                    $n++; ?><img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($image_title);?>" title="<?php //echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
	                    $slideno[] = $n;
	                }
	                ?>
                	</div>
				<?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
		                <div class="slide_info">
		                        <h1><?php echo esc_attr(get_theme_mod('slide_title'.$sln, 'Slide Title'.$sln),'healing-touch'); ?></h1>
		                        <p><?php // echo esc_attr(get_theme_mod('slide_desc'.$sln, 'Slide Description'.$sln),'healing-touch'); ?></p>
		                        <div class="clear"></div>
		                        <!-- <div class="slide_more"><a href="<?php // echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php // _e('Leer Mas','healing-touch');?></a></div>-->
		                </div>
                    </div>
				<?php
                } ?>
                </div>
                <div class="clear"></div>
			<?php
			}?>
        </section>

    <?php }
	}
        // IMAGENES ESTATICAS - NO SLIDER
        if ( is_page('petroleogas') ):?>
            <div class="banner-wrapper">
                <img src="<?= $images_url;?>pages/oil/oil&gas.jpg" alt="Pétroleo y Gas" title="Pétroleo y Gas"/>
                <div class="up-title-oil-gas">Somos contratistas en el sector Petroleo y Gas</div>
            </div>
        <?php  endif;
        if ( is_page('energia') ):?>
            <div class="banner-wrapper">
                <img src="http://tek-innova.com/wp-content/themes/healing-touch/images/slides/energy.jpg" alt="Energía" title="Enegía" class="basic-img energy-banner-img"/>
                <div class="up-title-energy">Los consultores de energía de Tek INNOVA...</div>
				<div class="up-content-energy">
                    <p>Los Consultores de Energía de Tekinnova a las empresas de servicios públicos y privadas a navegar los retos actuales
                    que incluyen: la cambiante generación mixta y esfuerzos para reducir los niveles de carbón, la obtención de
                    combustible y el suministro de energía a costos razonables y la optimización de la eficiencia operativa y de
                    servicio al cliente. Trabajamos con empresas de servicios públicos y privadas para convertir estos retos en
                    oportunidades para desarrollar todo su potencial, invertir de forma inteligente y ser más valioso.</p><br>
                    <p>
                    Tekinnova ha trabajado con empresas de servicios públicos y las industrias de energía alternativa.
                    Nuestros clientes representan una amplia muestra representativa del sector: los generadores de energía,
                    centrales eléctricas y de gas, conglomerados de múltiples servicios públicos, proveedores de energía
                    alternativa, las empresas de comercialización de energía, reproductores de almacenamiento y distribución de
                    gas, empresas de servicios energéticos, los servicios públicos de agua y residuos y diversificada que son líderes en el sector energético.</p>
				</div>
            </div>
        <?php endif;
		if ( is_page('tecnologia-de-informacion') ):?>
            <div class="banner-wrapper">
				<img src="<?= $images_url;?>pages/it/ti.jpg" alt="Tecnologia de Informacion" title="Tecnologia de Informacion" style="width: 100%;" class="title-ti-img" />
				<div class="up-title-ti">Tek INNOVA cuenta con un equipo de desarrolldores de software para llevar a cabo cualquier proyecto para su empresa. Nos enfocamos en la obtencion de resultados excepcionales que impulsan el valor de su negocio</div>
				<div class="down-title-ti">Nuestros diseñadores e ingenieros de software son expertos que trabajan con usted
				en cada paso del proceso como un equipo de producto dedicado a resolver sus problemas mas complejos. Nuestro enfoque de colaboración entre las organizaciones fomenta el pensamiento creativo que ofrece resultados.</div>
            </div>
        <?php endif;
		if ( is_page('telecom') ):?>
            <div class="banner-wrapper">
            	<img src="<?= $images_url."telecom2.jpg";?>" alt="Telecom" title="Telecom" style="width: 100%;" class="telecom-img" />
            	<div class="up-title-telecom">Tek INNOVA presta servicios a empresas de Telecomunicaciones en el mercado Latino Americano y el Caribe</div>
            </div>
        <?php endif;
        if ( is_page('servicios') ):?>
            <div class="banner-wrapper">
            	<img src="http://www.tek-innova.com/wp-content/themes/healing-touch/images/slides/t i.jpg" alt="Servicios" title="Servicios" />
            	<div style="position:absolute;width:500px;background-color:;color:white;top:0;left:0;padding-left:400px;padding-top:150px;font-size:40px;z-index:5;">Tek INNOVA presta servicios a empresas de Telecomunicaciones en el mercado Latino Americano y el Caribe</div>
            </div>
        <?php endif;?>

<!--  SEGUNDO SEGMENTO -->
	<div id="wrapper">
		<div class="<?= is_front_page()?"header2":"header2";?>">
    		<div class="site-aligner">
                <!-- <div class="clear"></div>-->
            </div><!-- site-aligner -->
        </div>

		<?php if ( is_home() || is_front_page() ) {?>
        <?php if( get_theme_mod( 'hide_slider' ) == '') { ?>
        <section id="home_slider">
        	<?php
			$sldimages = '';
			?>

        	<?php

			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php
                foreach( $slAr as $sv ){
                    $image_src = isset($sv['image_src'])?$sv['image_src']:"";
                    $image_title = isset($sv['image_title'])?$sv['image_title']:"";
                    $n++; ?><img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($image_title);?>" title="<?php //echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="slide_info">
                            <h1><?php echo esc_attr(get_theme_mod('slide_title'.$sln, 'Slide Title'.$sln),'healing-touch'); ?></h1>
                            <p><?php echo esc_attr(get_theme_mod('slide_desc'.$sln, 'Slide Description'.$sln),'healing-touch'); ?></p>
                            <div class="clear"></div>
                    </div>
                    </div><?php
                } ?>
                </div>
                <div class="clear"></div><?php
			}
            ?>
        </section>
        </div><!-- end div wrapper -->

        <?php } }
        // IMAGENES ESTATICAS - NO SLIDER
        if ( is_front_page() ) {?>
			<div class="main-content-wrapper">
          		<img src="<?= $images_url."sliderfondo_telecomunicaciones.jpg";?>" alt="Telecomunicaciones" title="Telecom" class="basic-img" />
			  	<div class="main-content-obj">
			  		<div class="title">Nuestro Enfoque</div>
					<div class="content">
						<p>Como parte de la metodología de Tek Innova, ofrecemos una base
	                de conocimiento del mercado Mexicano así como las tendencia actuales. Adicinalmente, Tek Innova posee enfoque en los diferentes pilares que hay que contemplar para el diseño
	                    de soluciones, la implementacion y la operación, asegurando la organización y establecimiento de procesos para así integrar el portafolio de productos y servicios diferenciales.
	                    </p>
					</div>
					<div class="title">Misión</div>
					<div class="content">
						<p>Ser el mejor aliado estrategico de nuestros clientes mediante el suministro de soluciones y servicios en sus areas
	                        de competencia que se adapten a sus necesidades y los ayude a maximizar su productividad.
	                    </p>
					</div>
					<div class="title">Visión</div>
					<div class="content">
						<p>Ser reconocidos como una Empresa Líder en nuestras áreas de competencia y convertirnos en el socio tecnológico
	                        clave de las empresas que buscan apoyarse para ser exitosas en su area de negocios.
	                    </p>
					</div>
			  	</div>
            </div>
      <?php  }
        else if ( is_page('petroleogas') ) {?>
			<div class="petroleogas-middle-banner">
        		<div class="content">
                	<p style="text-align: center">
		                Como contratista en el sector de Petroleo y Gas, contamos con una cartera de servicios integrales, Tek INNOVA ofrece capacidades completas de construccion
		                fabricación y mantenimiento de soluciones a medida, llave en mano de sistema mecanicos, electricos y de control, mano de obra y otros servicios en general.
					<br><br>
                            Lo llevamos todos juntos como un equipo de expertos, con un enfoque en la mano de obra, seguridad y calidad, para completar
                            los proyectos de nueva construcción, ampliación, mantenimiento y desarrollo de capital. Desde pequeñas modernizaciones de fabrica
                            a las nuevas modernizaciones de.
                    </p>
                </div>
                <div style="position:absolute;max-width:1900px;background-color:;color:white;top:0;left:0;padding-left:40px;padding-top:110px;font-size:20px;z-index:5;"></div>
			</div>
            <div class="petroleogas-end-banner">
                <img src="<?=$images_url."petroleum-company.jpg";?>" alt="" title="Tecnologia de Informacion" style="width: 100%;"/>
                <div class="content">Proyectando...</div>
            </div>
          <?php }

		else if ( is_page('tecnologia-de-informacion') ) {?>
					<div style="position:relative;">


                    </div>
          <?php }

		else if ( is_page('telecom') ) {?>
            <div class="telecom-wrapper">
				<div class="sub-wrapper">
					<h4 class="title">
                       Nosotros les ayudamos a comprender mejor a sus clientes, construir redes superiores, encontrar un camino sostenible para el
                        crecimiento y alcanzar el liderazgo en costos, manteniendo un alto nivel de desempeño. Hemos completado muchos proyectos con los
                        clientes que intentan enfrentarse a los mayores desafíos y oportunidades que presentan la evolución continua de la industria.
                    </h4>
					<br><br>
					<h4 class="subtitle">Nuestro objetivo es crear un valor único para los clientes mediante el aprovechamiento de:</h4>
                    <ul class="content">
                        <li>El conocimiento experto de las cuestiones tecnológicas y de negocios en el sector de las telecomunicaciones.</li>
                        <li >Capacidad de Aconsejar, Planificar, Desplegar y Gestionar Redes de Telecom.</li>
                        <li>Integración de sistemas a través de plataforma y tecnologías múltiples.</li>
                        <li>Relaciones con clientes globales, capacidades de entrega y presencia en el mercado.</li>
                        <li>La experiencia y los conocimientos adquiridos mediante la ejecución de proyectos en varios países.</li>
                	</ul>
				</div>
            </div>
          <?php }

        else if ( is_page('energia') ) {?>
            <div class="energy-wrapper-1">
				<div class="left">
					<div class="title">
						A nivel corporativo, nuestros expertos colaboran con las administracion para:
					</div>
					<div class="content">
						<ul>
							<li>Desarrollar una estrategia de inversión corporativa</li>
							<li>Evaluar macro tendencias de la industria y su impacto en los servicios públicos</li>
							<li>Implementar nuevos modelos de negocio, como los servicios de eficiencia "inteligentes" o la generación distribuida</li>
							<li>Identificar el nivel adecuado de integración vertical</li>
							<li>Definir la cartera y estrategias de expansión internacional</li>
							<li>Aumentar la eficiencia de las funciones de apoyo</li>
							<li>Integrar la estrategia corporativa y las finanzas corporativas para gestionar el retorno total para el accionista</li>
							<li>Inculcar una cultura de alto rendimiento impulsada a trevés del negocio</li>
						</ul>
					</div>
				</div>
            </div>
                <div style="position:absolute;max-width:1900px;background-color:;color:white;top:0;left:0;padding-left:40px;padding-top:110px;font-size:20px;z-index:5;"></div>            
            <div class="energy-wrapper-2">
                <img src="<?=$images_url;?>pages/energy/energia_solar.jpg" alt="" title="Tecnologia de Informacion" style="width: 100%;"/>
                <div class="content">
                    <h2 style="text-align:center; font-size:23px;">La experiencia para satisfacer todos los desafios</h2>
					<br/>
					<p style="font-size:16px; line-height:22px;">Desde el asesoramiento hasta la construcción de mantenimiento, Tek Innova ofrece una cartera completa de servicios apoyando cualquier elemento
					de su proyecto de energía. Sea cual sea el tamaño de ó el tipo de aplicación, Tek Innova tiene la amplitud y profundidad de experiencia para ofrecer
					una planta de energía a medida para adaptarse a sus necesidades.</p><br>
					<p style="font-size:16px; line-height:22px;">Combinamos nuestra experiencia en ingeniería con nuestra red para ofrecer soluciones personalizadas para proyectos de energía
						Diésel - en cualquier lugar en todo el país.</p><br>
					<p style="font-size:16px; line-height:22px;">Las planta de enregía diésel siguen siendo la primera opción para la generación de energía en cautividad en todo el mundo. Estas centrales ofrecen
					una mayor fiabilidad y operaciones independientes de la red, lo que aumenta a los operadores el control que tienen sobre su energía, y protegerlos
					contra los cortes de energía.</p><br>
					<p style="font-size:16px; line-height:22px;">Tek INNOVA un líder en la generación de energía diésel tiene el know-how y recursos para establecer plantas de energía de clase mundial
					para satisfacer sus objetivos. Nuestro servicio llave en mano abarca todo, desde la evaluación del emplazamiento de la instalación y el funcionamiento
					continuo y soporte post-venta. Con los motores Cummins de alta resistencia que son conocidos por su eficiencia de combustible y fiabilidad, se obtiene
					el rendimiento que necesita para lograr desempeños óptimos en su inversión.</p>
                </div>
            </div>

            <div class="energy-wrapper-3">
				<h1 class="title">
					Una línea completa de capacidades del proyecto en su servicio
				</h1>
				<div class="content">
					Utilizamos nuestras capacidades de proyectos y un enfoque consultivo basado en el equipo para asegurar el desarrollo
					de su solución de la planta de energía a medida que maximiza el retorno de la inversión.
				</div>
            </div>

            <div class="energy-wrapper-4">
				<h1 class="title">
					Nuestros PRODUCTOS
				</h1>
				<div class="content">
					Tek INNOVA ha estado siempre en la vanguardía para promover el uso de la energía solar en el consumo de dia a día,
					no solo en los productos solares al por menor, sino también en la generación de la energía solar de grandes dimensiones.
					Con los años hemos entregado proyectos que van hasta 600 Mega Watts y mirando hacia adelante para entregar proyectos
					aún mas grandes. También nuestra gama de productos al por menor han traido una gran alegria a nuestros clientes.
					Constantemente seguimos ofreciendo productos para el futuro.
					<br/><br/>
					Tek INNOVA ofrece productos que son altamente eficases y fiables, los cuales se pueden aplicar en diversos proyectos.
				</div>
            </div>

        <?php }

        else if ( is_page('servic ios') ) {?>
          		   <div style="position:relative;">
                   <img src="http://www.tek-innova.com/wp-content/themes/healing-touch/images/slides/ti.jpg" alt="Servicios" title="Servicios" />
                   <div style="position:absolute;width:500px;background-color:;color:white;top:0;left:0;padding-left:400px;padding-top:150px;font-size:40px;z-index:5;">Tek INNOVA presta servicios a empresas de Telecomunicaciones en el mercado Latino Americano y el Caribe</div>
          		   </div>
          <?php }
?>
