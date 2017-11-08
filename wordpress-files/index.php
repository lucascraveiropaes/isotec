<?php get_header(); ?>
	<?php get_navbar(1); ?>

	<div class="fh5co-hero">
		<div class="fh5co-overlay"></div>
		<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/bg/bg3.jpg);">
			<div class="desc animate-box">
				<h2>ISOTEC Soluções</h2>
				<span>A melhor solução para seus problemas em engenharia</a></span>
				<span><a class="btn btn-white" href="#">Saiba mais</a></span>
			</div>
		</div>

	</div>
	<!-- end:header-top -->
	<div id="fh5co-work-section" id="trabalhos">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>Nosso trabalho</h3>
					<p>Veja algumas seleções dos nossos serviços já fornecidos para outras empresas.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="tz-gallery">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/slide/1.jpg);">
							<a class="image-popup text-center lightbox" href="<?php bloginfo( 'template_url' ); ?>/images/slide/1.jpg">
								<div class="prod-title">
									<h3>Nome do Serviço</h3>
									<span>Curta descrição</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/slide/3.jpg);">
							<a class="image-popup text-center lightbox" href="<?php bloginfo( 'template_url' ); ?>/images/slide/3.jpg">
								<div class="prod-title">
									<h3>Nome do Serviço</h3>
									<span>Curta descrição</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/slide/5.jpg);">
							<a class="image-popup text-center lightbox" href="<?php bloginfo( 'template_url' ); ?>/images/slide/5.jpg">
								<div class="prod-title">
									<h3>Nome do Serviço</h3>
									<span>Curta descrição</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-8 col-sm-8">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/slide/4.jpg);">
							<a class="image-popup text-center lightbox" href="<?php bloginfo( 'template_url' ); ?>/images/slide/4.jpg">
								<div class="prod-title">
									<h3>Nome do Serviço</h3>
									<span>Curta descrição</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fh5co-work-section -->
	<!--div id="fh5co-content-section" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>O que nossos clientes dizem</h3>
					<p>Procuramos sempre fornecer um serviço de qualidade e confiança para nossos clientes, pois sabemos que isso é um diferencial no mercado. Mas sem dúvida, a melhor parte é o retorno:</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-testimonial text-center animate-box">
						<figure>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/user-1.jpg" alt="user">
						</figure>
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur.</p>
						</blockquote>
						<span>Nome da Pessoa, Empresa.</span>
					</div>
				</div>
			</div>
		</div>
	</div-->
	<!-- fh5co-content-section -->
	<div id="fh5co-blog-section" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>Veja o nosso <a href="blog.html" class="link-dotted">blog</a></h3>
					<p>Acompanhe sempre o conteúdo e informações mais recente sobre nossos produtos e serviços.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-lg-4 col-md-4 post-list">
						<div class="fh5co-blog animate-box">
							<?php
                                if ( has_post_thumbnail() ) {
                            ?>
		                            <a href="<?php the_permalink() ?>">
		                            	<?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
									</a>
                            <?php   
                                }
                            ?>

							<div class="image-popup" href="<?php the_permalink() ?>">
								<div class="prod-title">
									<h3>
										<a href="<?php the_permalink() ?>">
											<?php the_title(); ?>	
										</a>
									</h3>
									<span class="posted_by">
										<?php the_author(); ?>
									</span>
									<span class="comment">
										<i class="icon-bubble22"></i>
										<?php the_time('Y/m/d'); ?>
									</span>
									<?php the_excerpt() ?>
									<a href="<?php the_permalink() ?>" class="btn btn-gray">Continue Lendo</a>
								</div>
							</div>
						</div>
					</div>
	            <?php endwhile; else: endif; wp_reset_query(); ?>

			</div>
		</div>
	</div>
<?php get_footer(); ?>