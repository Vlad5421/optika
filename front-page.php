<?php get_header(); ?>
   <main>
        <section class="main_wave">
            <div class="fixed-container"">
                <div class="main_offer flex">
                    <div class="main_offer_picture">
                        <h1 class="main_offer_title">eyeline</h1>
                        <p class="main_offer_subtitle">- качественная оптика <br> по доступным ценам</p>
                        <div class="main_offer_brands flex">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/band1.png" class="offer_brands_brand1" alt="брэнды">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/band2.png" class="offer_brands_brand2" alt="брэнды">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/band3.png" class="offer_brands_brand3" alt="брэнды">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/band4.png" alt="брэнды">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/band5.png" alt="брэнды">                           
                        </div>

                        <div class="main_offer_link">
                                <a href="/shop">контактные линзы</a>
                        </div>
                    </div>

                    <aside class="main_offer_aside">
                        <a href="">
                            <div class="main_offer_aside_first">
                                <h2 class="main_offer_aside_title">Новинка!</h2>
                                <p class="main_offer_aside_desc">Premio – это силикон-гидрогелевые<br> контактные линзы (Япония)</p>
                            </div>
                        </a>

                        <a href="">
                            <div class="main_offer_aside_second">
                                <h2 class="main_offer_aside_title">Акция!</h2>
                                <p class="main_offer_aside_desc">Скидка на все линзы Nikon с Transitions<br> GEN8 в период с 15 февраля по 31 мая<br> 2021 года.</p>
                            </div>
                        </a>
                    </aside>

                </div>
            </div>
        </section>

        <section class="advantages">
            <div class="fixed-container">
                <h2 class="section_title">Наши преимущества</h2>
                
                <div class="slider-container">
                    <div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv1.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Индивидуальный заказ<br> очков по рецепту</p>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv2.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Большой ассортимент<br> товаров</p>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv3.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Быстрая доставка по<br> всей России</p>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv4.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Постоянные скидки и<br> акции</p>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv5.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Гарантия качества</p>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv6.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Доступные цены</p>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="advantages_item flex">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/adv7.svg" class="advantages_item_img" alt="">
                                    <p class="advantages_item_desc">Клиентов приводят<br> своих друзей и<br> родственников</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="frames">
            <div class="fixed-container">
                <div class="slider-container">
    
                    <div class="slaider-header flex">
                        <div class="frame flex">
                            <h2 class="section_title">Оправы</h2>
                            <p class="frame_hit">хиты продаж</p>
                        </div>
                        <div>
                            <button class="swiper-button-next1"></button>
                            <button class="swiper-button-prev1"></button>
                        </div>
                    </div>
                    <div class="swiper-container1">
    
                        <div class="swiper-wrapper slider-start2">
                            <?php
                                // параметры по умолчанию
                                $posts = get_posts( array(
                                'numberposts' =>  7,
                                'category'    =>  26,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );
            
                                foreach( $posts as $post ){
                                setup_postdata($post);
                            ?>
                            <article class="swiper-slide  frame_item">
                                <a href="<?php the_permalink ()?>">
                                    <img src="<?php echo get_the_post_thumbnail_url();?>" class="frame_item_img" alt="<?php the_title () ?>">
                                    <h3 class="preview_title"><?php the_title () ?></h3>
                                    <div class="preview_price flex">
                                        <span>от</span>&#160; <span>1690<?php //the_field("cena");?></span>&#160;<span>руб.</span>
                                    </div>
                                </a>
                            </article>
                            <?php
                                }
                                wp_reset_postdata(); // сброс
                            ?>	
                                
                        </div>
                        <div class="frame_item_look">
                            <a href="frames-and-brands">
                                    Смотреть <br>все оправы
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <section class="full-image">
            <div class="fixed-container">
                <h2 class="visually-hidden">Иллюстрация</h2>
                <div class="illustrations flex">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/ill1.jpg" alt="optikaeyeline">
                        <img class="no-mobile" src="<?php echo get_template_directory_uri()?>/assets/img/ill2.jpg" alt="optikaeyeline">
                </div>
            </div>
        </section>
        

        <section class="service">
            <div class="fixed-container">
                <div class="slider-container">

                    <div class="swiper-container2">
                        <div class="slaider-header flex">
                            <div class="frame flex">
                                <h2 class="section_title">О сервисе</h2>
                                <a href="/about-us" class="service_link">Читать полностью ></a>
                            </div>
                            <div>
                                <button class="swiper-button-next2"></button>
                                <button class="swiper-button-prev2"></button>
                            </div>
                        </div>		

                        <div class="swiper-wrapper">
                            <div class="swiper-slide  service_item flex">
                                
                                    <p class="service_slider_desc">
                                            Ярким, четким и насыщенным — именно таким видят мир клиенты нашего салона оптики. Найти идеальную оправу и изготовить комфортные очки с качественными линзами для глаз — возможно! В нашем салоне оптики в Новороссийске представлен обширный ассортимент товаров, отвечающих российским и международным стандартам качества по лучшим ценам.

                                        <br><br>
                                            Так, в нашем ассортименте Вы найдете солнцезащитные очки, очки хамелеоны, очки для водителей и рыбаков. Наши квалифицированные консультанты-оптометристы чутко относятся к индивидуальным потребностям и особенностям зрения каждого клиента, помогут проверить зрение и подобрать очки в Новороссийске.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/about2.jpg" class="service_slider_img" alt="">
                                
                            </div>

                            <div class="swiper-slide  service_item flex">
                            
                                    <p class="service_slider_desc">
                                        Такой подход позволяет максимально эффективно помогать в выборе линз и оправ, предоставлять профессиональные консультации и наглядно демонстрировать различия между моделями линз и оправ, в том числе прогрессивных линз и безободковых оправ. Так, весь процесс от подбора оправ до изготовления очков становится понятным, быстрым и удобным. <br>
                                        <br>
                                        В Eyeline возможен индивидуальный заказ очков по рецепту. Здесь же вы можете заказать очки для чтения, очки для дали, прогрессивные очки, имиджевые очки, а также солнцезащитные очки и поляризационные очки с коррекцией зрения. Мастерские по изготовлению очков одобрены производителями линз и являются нашими партнерами уже много лет. Оборудование и профессионализм сотрудников позволяет выполнять самые сложные заказы качественно и с гарантией.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/about3.jpg" class="service_slider_img"  alt="">
                                
                            </div>

                            <div class="swiper-slide  service_item flex">
                                
                                <p class="service_slider_desc">
                                    Регулярная проверка зрения и качественная оптика это залог здоровья Ваших глаз. Мы дорожим доверием наших клиентов и делаем все необходимое для того, чтобы прийдя в салон, вы смогли приобрести качественные очки или линзы, которые станут удобным и стильным дополнением каждого дня.
                                    <br> <br>
                                    Радость от возможности видеть лучше, замечать детали без малейших искажений достоин каждый в любом возрасте. С нашим салоном оптики Eyeline в Новороссийске Вы убедитесь сами, что забота о здоровье глаз — это просто, безопасно и комфортно!
                                </p>
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/about2.jpg" class="service_slider_img"  alt="">
                                
                            </div>
                        </div>						
                    </div>
                    <div class="service_numbers flex">
                        <div class="service_numbers__item">
                            <p class="service_numbers_title">1000+</p>
                            <p class="service_numbers_desc">У нас большой<br>ассортимент<br> товаров</p>
                        </div>
                        <div class="service_numbers__item">
                            <p class="service_numbers_title">81%</p>
                            <p class="service_numbers_desc">Клиентов <br>приводят своих <br>друзей и <br>родственников</p>
                        </div>
                        <div class="service_numbers__item mini">
                            <p class="service_numbers_title">%</p>
                            <p class="service_numbers_desc">Доступные цены</p>
                        </div>
                    </div>	
                </div>
                
            </div>
            <a class="service__mob-link" href="/all-news">
                <div class="service__mob-link-txt">
                    Подробнее
                </div>
            </a>
        </section>

        <section class="news_index">
            <div class="fixed-container">
                <div class="flex">
                    <h2 class="section_title">Новости и события</h2>
                    <a href="/all-news" class="service_link">Читать  все новости ></a>
                </div>

                <ul class="news_list flex">
                    
                <?php
            // параметры по умолчанию
                $posts = get_posts( array(
                'numberposts' =>  3,
                'category'    =>  24,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                setup_postdata($post);
                // var_dumpe($post);
                ?>
                    <li class="news_item">
                        <a href="<? the_permalink() ?>">
                            <img src="<?php echo get_the_post_thumbnail_url( $post, 'full' ); ?><? //the_field('photo_dop') ?>" class="news_item_img" alt="">
                            
                            <h3 class="news_item_title"><?php the_title () ?></h3>
                            <div class="news_item_day">
                                <time datetime="2018-06-19T08:12:30+03:00"><?php the_time(' j F Y '); ?></time>
                            </div>
                        </a>
                    </li>
                    
                <?php
                    }
                wp_reset_postdata(); // сброс
                ?>	
                    <li class="news_item mob">
                        <a href="/all-news" class="news_item__link">
                            Смотреть все новости
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="contacts-main">
            <div class="fixed-container">
                <div class="contact flex">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/contact.webp" alt="">
    
                    <div class="contact_content">
                        <h2 class="section_title">Контактная информация</h2>
    
                        <ul class="contact_list">
                            <li class="contact_item_operating">
                                Мы работаем с 10:00 до 21:00 без <br>перерывов и выходных.
                            </li>
    
                            <li class="contact_item_adress">
                                Наш адрес: г. Новороссийск, проспект Дзержинского 211/2, ТЦ Перекресток, 1 этаж
                            </li>
    
                            <li class="contact_item_tel">
                                <a href="tel:+79891973488">+7 (989) 197-34-88</a>
                            </li>
    
                            <li class="contact_item_mail">
                                <a href="mailto:info@optikaeyeline.ru">info@optikaeyeline.ru</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</main>
<?php get_footer(); ?>