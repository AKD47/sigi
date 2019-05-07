<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
/*variable for news category*/
$girls = new WP_Query(array(
    'category_name' => 'divky',
    'posts_per_page' => 20
));
?>
<section class="girls">
    <div class="container">
        <div class="girls__wrapper">

            <!--loop-->
            <?php if ($girls->have_posts()) : query_posts('cat=divky')?> <!--adding to "if" category_ID-->

                <?php while (have_posts()) :
                    the_post(); ?>

                    <a href="<?php the_permalink() ?>" class="girls__wrapper--element">
                        <img src="<?php the_post_thumbnail(); ?>" alt="">
                        <p><?php the_title(); ?></p>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
            <!--end loop-->
        </div>
    </div>
</section>