<?php
/*
Template Name: О нас
*/

get_header();
do_action( 'optika_woocommerce_breadcrumb' );
?>
<main>
		<div class="breadcrumbs">
			<div class="breadcrumbs_item  fixed-container"><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?></div>
		</div>

		<section class="main_page fixed-container">
            <h1 class="section_title">О нас</h1>

            <article class="page_section">
                <h2 class="subtitle_italic">“ Мы заботимся о Ваших потребностях! “</h2>
                <p>Наши консультанты регулярно проходят обучение и повышают свою квалификацию, что подтверждает большое колличество сертификатов от таких производителей как Nikon, Alcon, Johnson & Johnson и многих других. Прямое общение с производителями оправ, линз и контактных линз позволяет нам находиться в теме последних новшеств в нашем направлении.</p>
            </article>
            

            <h2 class="section_title">Наши преимущества</h2>
		
			<div class="arrow_right"></div>
			<div class="arrow_left"></div>
            <ul class="advantages_list flex page_section">
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/adv1.svg" class="advantages_item_img" alt="">
                    <p class="advantages_item_desc">Индивидуальный заказ<br> очков по рецепту</p>
                </li>
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/adv2.svg" class="advantages_item_img" alt="">
                    <p class="advantages_item_desc">Большой ассортимент <br>товаров</p>
                </li>
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/adv3.svg" class="advantages_item_img" alt="">
                    <p class="advantages_item_desc">Быстрая доставка<br> по всей России</p>
                </li>
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/adv4.svg" class="advantages_item_img" alt="">
                    <p class="advantages_item_desc">Постоянные скидки и <br> акции</p>
                </li>
            </ul>
            
            <h2 class="section_title">Фото</h2>
            <div class="arrow_right"></div>
			<div class="arrow_left"></div>

            <ul class="advantages_list flex page_section">
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.jpg"  alt="">                    
                </li>
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.jpg"  alt="">                    
                </li>
                <li class="advantages_item flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.jpg"  alt="">                    
                </li>                
            </ul>

            <h2 class="section_title">Наша команда</h2>
		
			<div class="arrow_right"></div>
			<div class="arrow_left"></div>
            <ul class="advantages_list flex page_section">
                <li class="staff flex">
					<div class="staff_item">
                    	<img src="<?php echo get_template_directory_uri() ?>/assets/img/people2.png" class="staff_img" alt="">
					</div>
					<div class="staff_desc">
						<h3 class="sun_item_title">Ольга Махова</h3>
						<p class="staff_desc_text">
							Знает о линзах все. Регулярно повышает квалификацию и профессионализм. В оптике 15 лет.
						</p>
					</div>                 
				</li>
                <li class="staff flex">
					<div class="staff_item">
                    	<img src="<?php echo get_template_directory_uri() ?>/assets/img/people2.png" class="staff_img" alt="">
					</div>
					<div class="staff_desc">
						<h3 class="sun_item_title">Ольга Махова</h3>
						<p class="staff_desc_text">
							Знает о линзах все. Регулярно повышает квалификацию и профессионализм. В оптике 15 лет.
						</p>
					</div>                 
				</li>
				<li class="staff flex">
					<div class="staff_item">
                    	<img src="<?php echo get_template_directory_uri() ?>/assets/img/people2.png" class="staff_img" alt="">
					</div>
					<div class="staff_desc">
						<h3 class="sun_item_title">Ольга Махова</h3>
						<p class="staff_desc_text">
							Знает о линзах все. Регулярно повышает квалификацию и профессионализм. В оптике 15 лет.
						</p>
					</div>                 
				</li>
				<li class="staff flex">
					<div class="staff_item">
                    	<img src="<?php echo get_template_directory_uri() ?>/assets/img/people2.png" class="staff_img" alt="">
					</div>
					<div class="staff_desc">
						<h3 class="sun_item_title">Ольга Махова</h3>
						<p class="staff_desc_text">
							Знает о линзах все. Регулярно повышает квалификацию и профессионализм. В оптике 15 лет.
						</p>
					</div>                 
				</li>
            </ul>

		</section>		
	</main>
<?php get_footer(); ?>