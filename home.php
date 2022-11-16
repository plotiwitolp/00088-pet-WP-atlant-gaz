<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<div class="section">
    <div class="section-wrapper">
        <h2>Слайдер тест </h2>
        <div class="my-custom-slider">
            <?php
            global $post;
            $myposts = get_posts([
                'numberposts' => -1,
                'category' => 5,
                'order'       => 'ASC',
            ]);
            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>
                    <div class="test-slider-item">
                        <div style="width: 1200px; height: 300px; overflow: hidden;" class="test-slider-item-wrapper">
                            <h2 style="display: inline-block;"><?php the_title('<h4>', '</h4>'); ?></h2>
                            <?php
                            $default_attr = array(
                                'class' => "my-class",
                            );

                            the_post_thumbnail(
                                array(1200, 300),
                                $default_attr
                            ); ?>
                            <?php the_tags(); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
            <?php
                }
            } else {
                echo 'Постов не найдено';
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="121" title="Контактная форма 1"]'); ?>
    </div>
</div>
<!-- Стоимость газа в ваш газгольдер сегодня -->
<div class="section">
    <div class="section-wrapper">
        <h2>Стоимость газа в ваш газгольдер сегодня</h2>
        <div class="cost-today">
            <div class="cost-today-side">
                <div class="cost-today-side__title">Пропан</div>
                <div class="cost-today-side__desc">от 25 рублей за литр</div>
                <div class="cost-today-side__body">Физически испарение происходит до -40 градусов, что позволяет использовать его в наших с вами погодных условиях</div>
                <div class="cost-today-side__btn">Заказать</div>
            </div>
            <div class="cost-today-middle">
                <div class="cost-today-middle__title">Идеальное соотношение</div>
                <div class="cost-today-middle__percent">
                    <div>
                        <span>80%</span>
                        <span>пропана</span>
                    </div>
                    <div>
                        <span>20%</span>
                        <span>бутана</span>
                    </div>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/images/proportions 1.png">
            </div>
            <div class="cost-today-side">
                <div class="cost-today-side__title">Бутан</div>
                <div class="cost-today-side__desc">от 16 рублей за литр</div>
                <div class="cost-today-side__body">Испарение Бутана происходит только до 0 градусов и годится для использования в тёплое время года</div>
                <div class="cost-today-side__btn">Заказать</div>
            </div>
        </div>
        <img class="down-arrow" src="<?php echo get_template_directory_uri() ?>/images/down_arrow.png">
    </div>
</div>

<!-- Преимущества работы с нашей компанией -->
<div class="section">
    <div class="section-wrapper">
        <h2>Преимущества работы с нашей компанией</h2>
        <div class="advantages">
            <div class="advantages__colum">
                <div class="advantage-item">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/advantages/tank.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Экономия на хранилище </span>
                    <span class="advantage-item__desc">за счёт собственных цистерн на нашей базе</span>
                </div>
                <div class="advantage-item">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/advantages/baloon.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Любые объёмы поставки качественного газа</span>
                    <span class="advantage-item__desc">вы получаете объем от 1 тонны до 20 тонн, с сертификатом качества газа</span>
                </div>
                <div class="advantage-item">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/advantages/ribbon.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Длина заправочных рукавов — 50 метров</span>
                    <span class="advantage-item__desc">не требуется подъезд автомобиля вплотную к резервуару</span>
                </div>
            </div>
            <div class="advantages__colum">
                <div class="advantage-item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/advantages/track.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Экономия на транспорте</span>
                    <span class="advantage-item__desc">более 10 собственный газовозов</span>
                </div>
                <div class="advantage-item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/advantages/cards.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Оплата удобным для вас способом</span>
                    <span class="advantage-item__desc">все газовозы оснащены терминалами для оплаты вашего заказа</span>
                </div>
                <div class="advantage-item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/advantages/timer.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Доставка сжиженного газа в формате 24/7</span>
                    <span class="advantage-item__desc">привезем газ в удобное для вас время или же по графику</span>
                </div>
            </div>
            <div class="advantages__colum">
                <div class="advantage-item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/advantages/calc.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Поставки напрямую от производителей</span>
                    <span class="advantage-item__desc">нет наценки на стоимость газа как у перекупщиков и небольших частных компаний</span>
                </div>
                <div class="advantage-item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/advantages/drop.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Чистый газ без примесей</span>
                    <span class="advantage-item__desc">нет наценки на стоимость газа как у перекупщиков и небольших частных компаний</span>
                </div>
                <div class="advantage-item">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/advantages/sertif.png" class="advantage-item__pic">
                    </div>
                    <span class="advantage-item__title">Аттестованный персонал</span>
                    <span class="advantage-item__desc">квалифицированные сотрудники проведут полную консультацию и дадут рекомендации, если такие нужны будут</span>
                </div>
            </div>
        </div>
        <div class="warranty">
            <div class="warranty-left">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/transp 1.png" class="warranty-left__pic">
                </div>
            </div>
            <div class="warranty-right">
                <div class="warranty-right-wrapper">
                    <span class="warranty-right__h2">Благодаря нашему собственному автопарку мы можем давать гарантию, что доставим</span>
                    <span class="warranty-right__h2">за 4 часа</span>
                </div>
                <div class="warranty-right-wrapper">
                    <span class="warranty-right__desc">Это сильное конкурентное преимущество, которым мы дорожим</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Выберите свой объём Газовоза -->
<div class="section">
    <div class="section-wrapper">
        <h2>Выберите свой объём Газовоза</h2>
        <div class="volumes">

            <?php
            global $post;
            $myposts_volumes = get_posts([
                'numberposts' => -1,
                'category' => 8,
                'order' => 'ASC',
            ]);
            if ($myposts_volumes) {
                foreach ($myposts_volumes as $post) {
                    setup_postdata($post);
            ?>
                    <span class="volumes__btn volume__btn_active">
                        <a href="#?active='active'">
                            <?php the_title(); ?>
                        </a>
                    </span>
                    <?php // the_post_thumbnail(); 
                    ?>
            <?php
                }
            }
            wp_reset_postdata(); // Сбрасываем $post
            ?>
            <!-- <span class="volumes__btn volume__btn_active">Малый <br> 2000 л.</span>
            <span class="volumes__btn ">Малый <br> 2000 л.</span>
            <span class="volumes__btn ">Малый <br> 2000 л.</span>
            <span class="volumes__btn ">Малый <br> 2000 л.</span> -->
        </div>
        <div class="volume-banner">
            <pre>
            <?php print_r($_GET); ?>
            </pre>
            <img src="<?php bloginfo('template_url'); ?>/images/track2.png" class="volume-banner__pic">
        </div>
        <div class="volume-order">
            <img src="<?php bloginfo('template_url'); ?>/images/Screenshot_1.png">
        </div>
    </div>
</div>

<!-- Отзывы наших клиентов -->
<div class="section">
    <div class="section-wrapper">
        <h2>Отзывы наших клиентов</h2>
        <div class="feedback-slider">
            <div class="feedback-slider__deck">
                <div class="feedback-slider__cart">
                    <img src="<?php bloginfo('template_url'); ?>/images/feedback.png">
                </div>
                <div class="feedback-slider__cart">
                    <img src="<?php bloginfo('template_url'); ?>/images/feedback.png">
                </div>
                <div class="feedback-slider__cart">
                    <img src="<?php bloginfo('template_url'); ?>/images/feedback.png">
                </div>
            </div>
            <div class="feedback-slider__remote">
                <div class="feedback-slider__arrows">
                    <img src="<?php bloginfo('template_url'); ?>/images/down_arrow.png" class="feedback-slider__prev">
                    <img src="<?php bloginfo('template_url'); ?>/images/down_arrow.png" class="feedback-slider__next">
                </div>
                <div class="feedback-slider__dots">
                    <span class="feedback-slider__dot feedback-slider__dot_active"></span>
                    <span class="feedback-slider__dot"></span>
                    <span class="feedback-slider__dot"></span>
                    <span class="feedback-slider__dot"></span>
                    <span class="feedback-slider__dot"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ответы на часто задаваемые вопросы -->
<div class="section">
    <div class="section-wrapper">
        <h2>Ответы на часто задаваемые вопросы</h2>
        <div class="questions-accordion">

            <div class="questions-accordion__item">
                <input id="questions-accordion__check-1" type="checkbox" checked="checked">
                <label for="questions-accordion__check-1">Есть ли у вас инженеры в компании?</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cum temporibus facere voluptatem eos ex natus, nostrum quae eaque delectus aperiam nesciunt quibusdam necessitatibus id odio provident obcaecati labore at.</p>
            </div>

            <div class="questions-accordion__item">
                <input id="questions-accordion__check-2" type="checkbox">
                <label for="questions-accordion__check-2">Делаете ли вы отчистку газгольдера?</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cum temporibus facere voluptatem eos ex natus, nostrum quae eaque delectus aperiam nesciunt quibusdam necessitatibus id odio provident obcaecati labore at.</p>
            </div>

            <div class="questions-accordion__item">
                <input id="questions-accordion__check-3" type="checkbox">
                <label for="questions-accordion__check-3">А вы не испортите газон у меня и соседей?</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cum temporibus facere voluptatem eos ex natus, nostrum quae eaque delectus aperiam nesciunt quibusdam necessitatibus id odio provident obcaecati labore at.</p>
            </div>

            <div class="questions-accordion__item">
                <input id="questions-accordion__check-4" type="checkbox">
                <label for="questions-accordion__check-4">Вы предоставляете документы для субсидий?</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cum temporibus facere voluptatem eos ex natus, nostrum quae eaque delectus aperiam nesciunt quibusdam necessitatibus id odio provident obcaecati labore at.</p>
            </div>

            <div class="questions-accordion__item">
                <input id="questions-accordion__check-5" type="checkbox">
                <label for="questions-accordion__check-5">Смогу ли я заказать во время праздников?</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cum temporibus facere voluptatem eos ex natus, nostrum quae eaque delectus aperiam nesciunt quibusdam necessitatibus id odio provident obcaecati labore at.</p>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>