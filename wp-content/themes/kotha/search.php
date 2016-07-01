<?php get_header(); ?>

	<div class="st-content">
		<div class="container">
			<div class="row">

				<div class="
				<?php if (get_theme_mod( 'st_home_layout' ) == 'full') { ?>
					call-md-12
				<?php } else { ?>
					col-md-8
				<?php }
				 ?>
				">
					
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">


						<?php if ( have_posts() ) : ?>

							<header class="search-header">
								<div class="search-title"><?php printf( __( 'Search Results <h1>%s</h1>', 'shaped_theme' ), '<span>' . get_search_query() . '</span>' ); ?></div>
							</header><!-- .page-header -->

								<?php while ( have_posts() ) : the_post(); ?>

									<?php get_template_part( 'content', 'post' ); ?>

								<?php endwhile; ?>

								<?php
								 // Posts Pagination
								if (get_theme_mod('st_blog_pagination') == 'navigation') {
									st_posts_navigation();
								} else {
									st_posts_pagination();
								} ?>

							<?php else : ?>

								<?php get_template_part( 'content', 'none' ); ?>

							<?php endif; ?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
