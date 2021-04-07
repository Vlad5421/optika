<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EYELINE
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-167470752-1" defer></script>
	<!-- <meta charset="UTF-8"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Open+Sans:ital,wght@0,300;0,400;1,600;1,700&display=swap" rel="stylesheet">	
    <?php wp_head(); ?>
</head>
<body>
	
	<header>
		<div class="mobile-head">
			<div class="mob-menu flex">
				<div class="burger-button">
					<div class="burger-button__line"></div>
					<div class="burger-button__line"></div>
					<div class="burger-button__line"></div>
				</div>

				<div class="mob-menu-btn">
					МЕНЮ
				</div>
			</div>
			<a href="tel:+79891973488"> 
				<div class="header_tel flex">
						<span class="header_tel_cod">+7(989)</span>
						<span class="header_tel_nunber">197-34-88</span>
				</div>
			</a>
			<div class="mob-menu-wrap">
				<?php wp_nav_menu(['menu_class'=>'mob-submenu', 'theme_location'=>'mobile', 'container'=>'',]); ?>
				<i class="fa fa-times mob-menu-close" aria-hidden="true"></i>
			</div>
			<div class="mob-submenu-gray">
			</div>
		</div> <!-- mobile-head -->



		<div class="header_whitebar">				
			<div class="fixed-container">
				<div  class="header_first flex">
					<a href="/">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_1.svg" class="header_item_img" alt="логотип компании eyeline">
					</a>
					<div class="header_item flex">
						<a href="tel:+79891973488"> 
							<div class="header_tel flex">
									<span class="header_tel_cod">+7(989)</span>
									<span class="header_tel_nunber">197-34-88</span>
							</div>
						</a>

						<a href="/cart">
							<div class="cart_mini_prev">
								<div class="header_basket flex">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/basket.svg" class="header_basket_img" alt="количество товаров в корзине">
									<div class="header_basket_item"><?php echo WC()->cart->get_cart_contents_count(); ?>
									</div>
									<span class="header_basket_total"><?php optika_cart_summ() ?> руб.</span>
								</div>
							</div>
							
						</a>
					</div>
				</div>
			</div>
		</div>	
		<div class="fixed-container">
			<nav class="header_main flex">
				<ul class="header_nav flex">
					<li class="nav_catalog flex">
						
							<div  class="header_nav_square flex">
								<div class="header_nav_square_item"></div>
								<div class="header_nav_square_item"></div>
								<div class="header_nav_square_item"></div>
								<div class="header_nav_square_item"></div>
							</div>
							Каталог товаров
							<?php wp_nav_menu(['menu_class'=>'submenu', 'theme_location'=>'top', 'container'=>'',]); ?>
							
					</li>
					<li class="first_li"><a href="/shop/">Контактные линзы</a></li>
					<li><a href="/cart">Корзина</a></li>
					<li><a href="/about-us">О нас</a></li>
					<li><a href="/all-news">Новости</a></li>
					<li><a href="/contacts">Контакты</a></li>
				</ul>

				<button type="submit" class="header_main_search" aria-label="поиск"></button>
			</nav>
		</div>		
	</header>