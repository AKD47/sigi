<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sibi-team
 */

/*variable for news category*/
$other_news = new WP_Query(array(
	'posts_per_page' => 4,
	'category_name' => 'news'
));

get_header(); ?>


	<section class="news">
		<div class="container">
			<h1 class="news__title"><?php the_title(); ?></h1>
			<div class="news__images">
				<h3 class="news__subtitle"><?php the_time( 'd.m.Y' ); ?></h3>
				<div class="news__images--item">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>

			<!--loop of post text-->
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="news__descr">
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
			<!--end loop-->

		</div>
		<div class="separator"><img src="<?php bloginfo('template_directory'); ?>/img/separator-bg.png"></div>
	</section>

	<section class="news__others">
		<div class="container">
			<div class="school__wrapper">

				<!--loop-->
				<?php if ($other_news->have_posts()) : ?>

					<?php while ($other_news->have_posts()) :
						$other_news->the_post(); ?>

						<div class="school__wrapper--item">
							<div class="photo">
								<?php the_post_thumbnail(); ?>
							</div>

							<h3 class="title"><?php the_title(); ?></h3>

							<p class="date"><?php the_time( 'd.m.Y' ); ?></p>

							<div class="text"><?php the_content(); ?></div>
							<a href="<?php the_permalink() ?>" class="more"><span>vice</span></a>

						</div>

					<?php endwhile; ?>
				<?php endif; ?>
				<!--end loop-->

			</div>
		</div>
	</section>


<?php
get_footer();
