<?php 
	$index = 1;
	include 'include/header.php'; 
?>
<!--?php include 'include/navbar.php'; ?-->

		<!-- Banner -->
			<section id="banner">
				<div class="row no-collapse 50% uniform">
					<div class="12u">
						<h2>¡Bienvenido!</h2>
					</div>
					<div class="4u"></div>
					<div class="4u">
						<span class="image fit">
							<img src="images/acm.png">
						</span>
					</div>
					
				</div>
			</section>

		<!-- Main -->
			<section id="main" class="container">

				<section class="box special">
					<header class="major">
						<h2>¡Bienvenido a la Página del Capítulo ACM Uniandes!</h2>
						<p>Somos un grupo de estudiantes motivados y apasionados por la computación,
						 por experimentar, aprender y construir cosas nuevas para aportarle a nuestra comunidad.</p>
					</header>
					<span class="image featured"><img src="images/ml_uniandes.JPG" alt="" /></span>
				</section>

				<!---CMS -->

				<div class = "sc-content">
					<h1>Title</h1>
					<p></p>
				</div>

				<!--CMS -->



				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt icon1"></span>
							<h3>¿Por qué lo hacemos?</h3>
							<p>Porque nos gusta ayudar a la comunidad por medio de lo que más nos gusta hacer, software. Porque creemos que ser inventores es la mejor profesión del mundo. </p>
						</section>
						<section>
							<span class="icon major fa-lightbulb-o icon2"></span>
							<h3>¿Qué hacemos?</h3>
							<p>Soluciones a problemas que nosotros mismos tenemos como estudiantes y cuya solución se extrapola a más gente. Hacemos software, automatizamos procesos para darles eficiencia. </p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-simplybuilt icon3"></span>
							<h3>¿Cómo lo hacemos?</h3>
							<p>Haciendo que los innovadores de la universidad colaboren entre si. Experimentamos a altas velocidades, tenemos una toma de decisiones inclusiva y debatimos constructivamente. </p>
						</section>
						<section>
							<span class="icon major fa-question icon4"></span>
							<h3>¿Qué es ACM?</h3>
							<p>La Association for Computing Machinery es la organización educativa y científica en computación más grande del mundo. </p>
						</section>
					</div>
				</section>

				<div class="row">
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="images/JuntaACM.jpg" alt="" /></span>
							<h3>Nuestra Junta Directiva</h3>
							<p>Enterate de quien es que está liderando esta iniciativa y conctáctanos.  </p>
							<ul class="actions">
								<li><a href="junta.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="images/EquipoACM.jpg" alt="" /></span>
							<h3>Nuestro Equipo</h3>
							<p>Somos un equipo interdisciplinario que busca aprender y beneficiar a la comunidad.</p>
							<ul class="actions">
								<li><a href="equipo.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="https://scontent.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/s526x395/603830_877112182309501_210003835752543284_n.png?oh=ff4fe4a436baeca9fc8fe6bf100df5ef&oe=55CCF170" alt="" /></span>
							<h3>Actividades</h3>
							<p>Hacemos bootcamps, celebramos fechas especiales, hackathons y mucho más. </p>
							<ul class="actions">
								<li><a href="actividades.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="http://acm.uniandes.edu.co/wordpress/wp-content/uploads/2012/10/hlab2013.jpg" alt="" /></span>
							<h3>Proyectos</h3>
							<p>Desarrollamos una variedad de aplicaciones web y móviles, todas con un mismo fin. </p>
							<ul class="actions">
								<li><a href="proyectos.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
				</div>


				<div class = "row">
				<div class = "12u">
				<section = "box">
					<h2>Ofertas Laborales</h2>
					<p>Pronto te informaremos sobre nuestras ofertas</p>
				</section>
			</div>
			</div>


		<!-- CTA -->
			<section id="cta">

				<h2>¡Haz parte de nuestro capítulo!</h2>

				<form id='email_form' action="email.php" method="post">
					<div class="row uniform 50%">
						<div class="8u 12u(mobilep)">
							<input type="email" name="email" id="email" placeholder="Email Address" required />
						</div>
						<div class="4u 12u(mobilep)">
							<input type="submit" value="Enviar" class="fit"/>
						</div>
					</div>
				</form>
                <p id="p-email" style="display:none"></p>
                <script src="js/gen-scripts.js"></script>
			</section>

<?php include 'include/footer.php'; ?>
