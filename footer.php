<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EYELINE
 */

?>

<footer class="footer_bac">
			<div class="fixed-container">
				<div class="footer_conteiner flex">
					<nav class="foter_nav">
						<span class="foter_nav_title">Каталог</span>
						<ul  class="footer_list">			
							<li class="footer_item"><a href="/shop">Контактные линзы</a></li>
							<li class="footer_item"><a href="/sun-glasses">Солнцезащитные очки</a></li>
							<li class="footer_item"><a href="/accessories">Аксессуары</a></li>
							<li class="footer_item"><a href="/frames-and-brands">Оправы и бренды</a></li>
							<li class="footer_item"><a href="/brands-lins">Типы линз</a></li>
							<li class="footer_item"><a href="/type-lens">Бренды линз</a></li>
						</ul>
					</nav>
					<nav class="foter_nav">
						<span class="foter_nav_title">О КОМПАНИИ</span>
						<ul  class="footer_list">			
							<li class="footer_item"><a href="/about-us">О нас</a></li>
							<li class="footer_item"><a href="/all-news">Новости и события</a></li>
							<li class="footer_item"><a href="/all-news">Акции и скидки</a></li>
							<li class="footer_item"><a href="/contacts">Контакты</a></li>						
						</ul>
					</nav>
					<div class="foter_nav" > 
						<span class="foter_nav_title">наш адрес</span>
						<p>
							г. Новороссийск, проспект<br> Дзержинского 211/2, ТЦ <br>Перекресток, 1 этаж
						</p>
					</div>

					<div class="footer_contact">
						<a href="tel:+79891973488"> 
							<div class="footer_tel flex">
									<span class="header_tel_cod">+7(989)</span>
									<span class="header_tel_nunber">197-34-88</span>
							</div>								
					  </a>
					  <p class="footer_contact_operating">Пн-Вс с 10:00 до 21:00</p>

						<ul class="social_list flex">							

								<li class="social_item vkontakte">
									<a href="https://vk.com/club196280992/" aria-label="Vkontakte" title="Мы ВКонтакте"></a>
								</li>
								<li class="social_item facebook">
									<a href="https://www.facebook.com/optieyeline/" aria-label="facebook" title="Мы в Фэйсбуке"></a>
								</li>
								<li class="social_item tweetter">
									<a href="https://twitter.com/Eyeline27823144/" aria-label="Tweetter" title="Мы в твиттере"></a>
								</li>
								<li class="social_item odnoklassniki">
									<a href="https://ok.ru/profile/581317973229/" aria-label="odnoklassniki" title="Мы в Одноклассниках"></a>
								</li>
								<li class="social_item instagram">
									<a href="https://www.instagram.com/eyeline_nvrsk/" aria-label="instagram" title="Мы в инстаграм"></a>
								</li>
								<li class="social_item whatsapp">
									<a href="https://wa.me/79891973488/" aria-label="whatsapp" title="написать в вотсап"></a>
								</li>
						</ul>				

					</div>
				</div>

				<div class="footer_end flex">
					<a href="https://optikaeyeline.ru"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_1.svg" class="header_item_img" alt="логотип компании eyeline"></a>
					<a href="/Privacy-Policy" class="footer_end_link">Политика конфиденциальности 	&#169; 2021 г.</a>
				</div>
			</div>
			<?php wp_footer(); ?>
    </footer>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter72015091 = new Ya.Metrika({
                    id:72015091,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/72015091" style="position:absolute; left:-9999px;" alt="YaMetrIcon" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>