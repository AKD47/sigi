<?php
/**
 * Created by PhpStorm.
 * User: DC
 * Date: 30.01.2018
 * Time: 18:03
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
        <div class="person__photo">
            <?php the_post_thumbnail(); ?>
        </div>

        <!--loop of post text-->
        <?php if (have_posts()) : query_posts('cat=3') ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="person__descr">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
        <!--end loop-->

    <div class="separator"><img src="img/separator-bg.png"></div>
        
</section>

<section class="person__others">
    
    <div class="features__bg"><img src="img/trner-bg.png"></div>
    <div class="container">
        <div class="features__wrapper">
            <div class="features__wrapper--item">
                <div class="photo"><img src="img/trener-1.png"></div>
                <h3 class="title">Milo Kral</h3>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p><a href="person.html"
                                                                                            class="more"><span>vice</span></a>
            </div>
            <div class="features__wrapper--item">
                <div class="photo"><img src="img/trener-2.png"></div>
                <h3 class="title">Agata Prendi</h3>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p><a href="person.html"
                                                                                            class="more"><span>vice</span></a>
            </div>
            <div class="features__wrapper--item">
                <div class="photo"><img src="img/trener-3.png"></div>
                <h3 class="title">Viku Petr</h3>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p><a href="person.html"
                                                                                            class="more"><span>vice</span></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
