<?php
/**
 * Template Name: Single trener
 * Template Post Type: post
 */

/*variable for news category*/
$other_trener = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => 'trener'
));

get_header(); ?>


    <section class="person">
        <div class="container">
            <h1 class="person__title"><?php the_title(); ?></h1>
            <div class="person__photo"> <?php the_post_thumbnail(); ?></div>
            <div class="person__bg"><img src="<?php bloginfo('template_directory'); ?>/img/person-bg.png"></div>

            <!--loop of post text-->
            <?php while (have_posts()) : the_post(); ?>

                <div class="person__descr">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
            <!--end loop-->


        </div>

        <div class="separator"><img src="<?php bloginfo('template_directory'); ?>/img/separator-bg.png"></div>
    </section>

    <section class="person__others">
        <div class="features__bg"><img src="<?php bloginfo('template_directory'); ?>/img/trner-bg.png"></div>
        <div class="container">
            <div class="features__wrapper">


                <!--loop-->
                <?php if ($other_trener->have_posts()) : ?>

                    <?php while ($other_trener->have_posts()) :
                        $other_trener->the_post(); ?>

                        <div class="features__wrapper--item">
                            <div class="photo">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <h3 class="title"><?php the_title(); ?></h3>

                            <div class="text"><?= CFS () -> get('intro_for_trener')?></div>

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
