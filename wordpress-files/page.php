<?php get_header(); ?>
	<?php get_navbar(4); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-position: center center">
				<div class="desc animate-box">
					<h2><?php the_title(); ?></h2>
					<span><?php get_post_meta(get_the_ID(), "Subtítulo"); ?></span>
				</div>
			</div>
		</div>

		<div id="fh5co-about">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3><?php the_title(); ?></h3>
					</div>
				</div>
			</div>
			<div class="container tz-gallery">
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<a class="image-popup text-center lightbox" href="<?php the_post_thumbnail_url(); ?>">
							<figure>
								<?php
		                            if ( has_post_thumbnail() ) {
		                    	?>
	                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
		                        <?php   
		                            }
		                        ?>
							</figure>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile;  else: endif;?>
<?php get_footer(); ?>