<?php if (!defined('FW')) {
    die('Forbidden');
}
/*variable for news category*/
$news = new WP_Query(array(
    'posts_per_page' => 4,
    'category_name' => 'news'
));

/*variable for trener category*/
$trener = new WP_Query(array(
    'posts_per_page' => 4,
    'category_name' => 'trener'
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
            <?php if ($news->have_posts()) : ?>

                <?php while ($news->have_posts()) :
                    $news->the_post(); ?>

                    <div class="school__wrapper--item">
                        <div class="photo">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <h3 class="title"><?php the_title(); ?></h3>

                        <p class="date"><?php the_date(); ?></p>

                        <div class="text"><?php the_content(); ?></div>
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
            <?php if ($trener->have_posts()) : ?>

                <?php while ($trener->have_posts()) :
                    $trener->the_post(); ?>

                    <div class="features__wrapper--item">
                        <div class="photo">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <h3 class="title"><?php the_title(); ?></h3>

                        <p class="date"><?php the_date(); ?></p>

                        <div class="text"><?php the_content(); ?></div>
                        <a href="<?php the_permalink() ?>" class="more"><span>vice</span></a>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <!--end loop-->

        </div>

    </div>

</section>
