<?php get_header(); ?>
	<?php get_navbar(5); ?>

	<div class="fh5co-hero fh5co-hero-2">
		<div class="fh5co-overlay"></div>
		<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/bg/bg3.jpg);">
			<div class="desc animate-box">
				<h2>Produtos</h2>
				<span>Veja agora nossos melhores produtos feitos por engenheiros extremamente qualificados</span>
			</div>
		</div>
	</div>
	<!-- end:header-top -->
	<div id="fh5co-work-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>Produtos</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">

	            <?php
					$mypost = array( 'post_type' => 'produtos', );
				    $loop = new WP_Query( $mypost );
	            ?>
	            <?php while (  $loop->have_posts() ) : $loop->the_post();?>

					<div class="col-md-4 animate-box">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
							<a class="image-popup text-center" href="<?php the_permalink() ?>">
								<div class="prod-title">
									<span><?php the_excerpt() ?></span>
								</div>
							</a>
						</div>
						<h3><?php the_title(); ?></h3>
					</div>

	  			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>