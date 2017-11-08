<?php get_header(); ?>
	<?php get_navbar(4); ?>

	<div class="fh5co-hero">
		<div class="fh5co-overlay"></div>
		<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/bg/bg1.jpg);">
			<div class="desc animate-box">
				<h2 style="font-weight: 300">ISOTEC <b>Blog</b></h2>
				<span>Fique atualizado nas principais informações sobre a nossa empresa, serviços e produtos</a></span>
			</div>
		</div>

	</div>

	<div id="fh5co-blog-section" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
	            <?php endwhile; else: endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>