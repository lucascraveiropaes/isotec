<?php
	/* Template name: Contato */
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php get_header(); ?>
		<?php get_navbar(6); ?>

		<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-position: center center">
				<div class="desc animate-box">
					<h2>Entre em contato conosco</h2>
					<span>Estamos sempre disponíveis a qualquer momento</span>
				</div>
			</div>
		</div>
		<!-- end:header-top -->
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title"><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
							<ul class="contact-info">
								<li>
									<i class="icon-location-pin"></i>
									Rua, Número, Bairro, Macaé - Rio de Janeiro, Brasil
								</li>
								<li>
									<i class="icon-phone2"></i>
									+55 22 98765-4321
								</li>
								<li>
									<i class="icon-mail"></i>
									<a href="mailto:contato@isotecsolucoes.com.br">contato@isotecsolucoes.com.br</a>
								</li>
								<li>
									<i class="icon-globe2"></i>
									<a href="http://www.isotecsolucoes.com.br">www.isotecsolucoes.com.br</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="nome" placeholder="Informe seu nome...">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Informe seu email...">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="mensagem" placeholder="Digite a mensagem..." cols="30" rows="7"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-gray">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<div class="fh5co-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14785.992532002696!2d-41.4712803!3d-22.1069754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd778cd4d563ab5c4!2sPrefeitura+Municipal+de+Quissam%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1509830413772" frameborder="0" style="border:0" allowfullscreen style="width: 100% !important; height: 100% !important;"></iframe>
		</div>

	<?php get_footer(); ?>
<?php endwhile; else: ?>
	<?php header(get_home_url()); die(); ?>
<?php endif; ?>