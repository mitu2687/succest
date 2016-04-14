<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>
				<nav class="wp-prev-next">
					<ul id="pagination" class="pager">
						<?php
						$prev_post = get_previous_post();
						$next_post = get_next_post();

						if ( !empty( $prev_post ) ): ?>
						<li class="pager-prev pull-left"><?php previous_post_link('%link'); ?></li>
					<?php endif;
					if( !empty( $next_post ) ): ?>
					<li class="pager-next pull-right"><?php next_post_link('%link'); ?></li>
				<?php endif; ?>
			</ul>
		</nav>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
