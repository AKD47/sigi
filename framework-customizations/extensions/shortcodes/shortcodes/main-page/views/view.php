<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="top-banner" style="background-image: url(<?= $atts['top_banner_bg']['url'];?>);">

    <div class="container">

        <div class="top-banner__descr">

            <h1 class="top-banner__title"><?= $atts['top_banner_title'];?></h1>

            <p class="top-banner__subtitle"><?= $atts['top_banner_descr'];?></p>

        </div>

    </div>

</section>

<section class="school">

    <div class="container">

        <h3 class="school__title">Fotbalova skola<b>Horsta Siegla</b></h3>

        <div class="school__wrapper">

            <div class="school__wrapper--item">

                <div class="photo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/photo_1.png">
                </div>

                <h3 class="title">Sigi team vs<b>Cechtice</b></h3>

                <p class="date">16.06.2017 - TJ Sokol Cechtice</p>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>
                <a href="news.html" class="more"><span>vice</span></a>

            </div>

            <div class="school__wrapper--item">

                <div class="photo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/photo_2.png">
                </div>

                <h3 class="title">Sigi team vs<b>Cechtice</b></h3>

                <p class="date">16.06.2017 - TJ Sokol Cechtice</p>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>
                <a href="news.html" class="more"><span>vice</span></a>

            </div>

            <div class="school__wrapper--item">

                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/img/photo_3.png"></div>

                <h3 class="title">Sigi team vs<b>Cechtice</b></h3>

                <p class="date">16.06.2017 - TJ Sokol Cechtice</p>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>
                <a href="news.html" class="more"><span>vice</span></a>
            </div>

            <div class="school__wrapper--item">

                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/img/photo_4.png"></div>

                <h3 class="title">Sigi team vs<b>Cechtice</b></h3>

                <p class="date">16.06.2017 - TJ Sokol Cechtice</p>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>
                <a href="news.html" class="more"><span>vice</span></a>

            </div>

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

            <div class="features__wrapper--item">

                <div class="photo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/trener-1.png">
                </div>

                <h3 class="title">Milo Kral</h3>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>

                <a href="person.html" class="more"><span>vice</span></a>

            </div>

            <div class="features__wrapper--item">

                <div class="photo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/trener-2.png">
                </div>

                <h3 class="title">Agata Prendi</h3>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>

                <a href="person.html" class="more"><span>vice</span></a>

            </div>

            <div class="features__wrapper--item">

                <div class="photo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/trener-3.png">
                </div>

                <h3 class="title">Viku Petr</h3>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur
                    culpa debitis deserunt dicta dolorem dolorum earum excepturi explicabo maiores necessitatibus
                    numquam possimus provident quam repudiandae rerum, sit, suscipit.</p>

                <a href="person.html" class="more"><span>vice</span></a>

            </div>

        </div>

    </div>

</section>
