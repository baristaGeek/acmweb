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

				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt icon1"></span>
							<h3>¿Por qué lo hacemos?</h3>
							<p>Apple pie cupcake tootsie roll biscuit jujubes dessert. Bonbon cookie oat cake biscuit macaroon chocolate bar croissant. Tart pudding liquorice ice cream cookie pastry. Cake I love macaroon pie.</p>
						</section>
						<section>
							<span class="icon major fa-lightbulb-o icon2"></span>
							<h3>¿Qué hacemos?</h3>
							<p>Lemon drops halvah pudding croissant I love chupa chups dessert. Tootsie roll topping sugar plum lemon drops sweet chocolate pudding croissant dragée. Pie fruitcake toffee muffin marshmallow chocolate pastry bonbon.</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-simplybuilt icon3"></span>
							<h3>¿Cómo lo hacemos?</h3>
							<p>I love candy canes chupa chups marzipan. Lemon drops brownie macaroon muffin. Gummies pie caramels. Cake halvah I love.</p>
						</section>
						<section>
							<span class="icon major fa-question icon4"></span>
							<h3>¿Qué es ACM?</h3>
							<p>Ice cream dessert cupcake gummies sesame snaps. Soufflé cake brownie cake danish dragée jelly beans gingerbread. Liquorice cake dragée donut donut. Jujubes tart oat cake.</p>
						</section>
					</div>
				</section>

				<div class="row">
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10995920_10152716528247703_4766521307331989259_n.jpg?oh=029cd405671a9bc4a32e627bce031503&oe=559B8C3E&__gda__=1440549441_e61f72dc1223aa14e08ff69bba48f2ac" alt="" /></span>
							<h3>Nuestra Junta Directiva</h3>
							<p>#FotoCasual #MaricaSeTomóMiGuaro</p>
							<ul class="actions">
								<li><a href="junta.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="https://scontent.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/11130197_10153209334237908_7274923447481928872_n.jpg?oh=83b275c5f5c8d2455fc176b9446a07a3&oe=55AD2BE4" alt="" /></span>
							<h3>Nuestro Equipo</h3>
							<p>Somos un equipo interdisciplinario de estudiantes que buscan aprender y beneficiar a la comunidad por medio de proyectos, actividades y talleres.</p>
							<ul class="actions">
								<li><a href="equipo.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="images/pic03.jpg" alt="" /></span>
							<h3>Actividades</h3>
							<p></p>
							<ul class="actions">
								<li><a href="actividades.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
					<div class="6u 12u(narrower)">
						<section class="box special">
							<span class="image featured image-main"><img src="images/pic03.jpg" alt="" /></span>
							<h3>Proyectos</h3>
							<p></p>
							<ul class="actions">
								<li><a href="proyectos.php" class="button alt">Ver Más</a></li>
							</ul>
						</section>
					</div>
				</div>

			</section>

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
