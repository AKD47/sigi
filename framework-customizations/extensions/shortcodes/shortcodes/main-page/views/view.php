<?php if (!defined('FW')) {
    die('Forbidden');
}
/*variable for news category*/
$news = new WP_Query(array(
    'category_name' => 'news',
    'posts_per_page' => 4
));

/*variable for trener category*/
$trener = new WP_Query(array(
    'category_name' => 'trener',
    'posts_per_page' => 3
));

?>
<section class="top-banner" style="background-image: url(<?= $atts['top_banner_bg']['url']; ?>);">

    <div class="container">

        <div class="top-banner__descr">

            <h1 class="top-banner__title"><?= $atts['top_banner_title']; ?></h1>

            <p class="top-banner__subtitle"><?= $atts['top_banner_descr']; ?></p>

        </div>

    </div>

</section>

<section class="school">

    <div class="container">

        <h3 class="school__title">Fotbalova skola<b>Horsta Siegla</b></h3>

        <div class="school__wrapper">

            <!--loop-->
            <?php if ($news->have_posts()) : query_posts('cat=2')?> <!--adding to "if" category_ID-->

                <?php while (have_posts()) :
                    the_post(); ?>

                    <div class="school__wrapper--item">
                        <div class="photo">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <h3 class="title"><?php the_title(); ?></h3>

                        <p class="date"><?php the_time( 'd.m.Y' ); ?></p>

                        <div class="text"><?= CFS () -> get('intro_for_news')?></div>
                        <a href="<?php the_permalink() ?>" class="more"><span>vice</span></a>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <!--end loop-->

        </div>

    </div>

    <div class="separator">
        <img src="<?php bloginfo('template_directory'); ?>/img/separator-bg.png">
    </div>

</section>

<section class="features">

    <div class="features__bg">
        <img src="<?php bloginfo('template_directory'); ?>/img/trner-bg.png">
    </div>

    <div class="container">

        <h3 class="features__title">Osobnosti</h3>

        <div class="features__wrapper">

            <!--loop-->
            <?php if ($trener->have_posts()) : query_posts('cat=3'); ?> <!--adding to "if" category_ID-->

                <?php while (have_posts()) :
                    the_post(); ?>

                    <div class="features__wrapper--item">
                        <div class="photo">
                            <?php the_post_thumbnail($trener->ID, 'thumbnail'); ?>
                        </div>

                        <h3 class="title"><?php the_title(); ?></h3>

                        <div class="text"><?= CFS () -> get('intro_for_trener')?></div>
                        <a href="<?php the_permalink() ?>" class="more"><span>vice</span></a>

                    </div>

                <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
            <!--end loop-->

        </div>

    </div>

</section>
