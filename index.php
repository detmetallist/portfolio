<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>portfolio</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=1.01" async>
	<link rel="stylesheet" type="text/css" href="css/media.css?v=1.04" async>
</head>
<body>
	<div class="popup">
		<div class="popup_close">
			<img src="/img/popup_close.svg">
		</div>
		<div class="popup_slider">
			<div class="popup_slider_slides popup_slider_left_slides">
				<div class="slide_up">
					<img src="/img/slider_arrow_up.png">
				</div>
				<div class="slide_down">
					<img src="/img/slider_arrow_down.png">
				</div>
				<div class="popup_slider_content popup_slider_content_left">
					<div class="popup_slider_lenta popup_slider_lenta_left">
						<?php
							$files = scandir('img/portfolio/thumb-main');
							foreach ($files as $file) {
								$pos1=stripos($file, '.jpg');
								if($pos1){ 
									$link=mb_substr($file, 0, $pos1);
									?>
									<a href="#site-<?php echo $link; ?>">
										<div class="slide_bg"><img src="/img/zoom_in.png"></div>
										<img src="/img/portfolio/thumb/<?php echo $link.'/'.$link.'-main.jpg'; ?>">
									</a>
								<? }
							}
						?>
					</div>
				</div>
			</div>
			<div class="popup_full_slide">
				<img class="loading" src="/img/loading.gif">
				<div class="popup_full_slide_content">
					<img src="/img/portfolio/fullsize/agroturbo/agroturbo-main.jpg">
				</div>
				<div class="knopki">
					<a href="#video" class="video_href">Видео</a>
					<a href="#site" target="_blank" class="site_href">Открыть сайт</a>
				</div>
			</div>
			<div class="popup_slider_slides popup_slider_right_slides">
				<div class="slide_up">
					<img src="/img/slider_arrow_up.png">
				</div>
				<div class="slide_down">
					<img src="/img/slider_arrow_down.png">
				</div>
				<div class="popup_slider_content popup_slider_content_right">
					<div class="popup_slider_lenta popup_slider_lenta_right">
						<?php
							$files = scandir('img/portfolio/thumb-main');
							foreach ($files as $file) {
								$pos1=stripos($file, '.jpg');
								if($pos1){ 
									$link=mb_substr($file, 0, $pos1);
									?>
									<a href="#site-<?php echo $link; ?>">
										<div class="slide_bg"><img src="/img/zoom_in.png"></div>
										<img src="/img/portfolio/thumb/<?php echo $link.'/'.$link.'-main.jpg'; ?>">
									</a>
								<? }
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="popup_video">
		<div class="popup_close">
			<img src="/img/popup_close.svg">
		</div>
		<video src="/video/agroturbo/agroturbo.mp4" controls autobuffer autoplay></video>
	</div>
	<div class="mobile_menu_popup">
		<div class="main_bg_color"></div>
		<div class="mobile_header">
			<div class="contacts">
				<a href="https://t.me/detmetallist" target="_blank"><i class="fa fa-telegram"></i></a>
				<a href="viber://chat?number=%2B380983491438" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/></svg></a>
			</div>
			<div class="popup_close">
				<img src="/img/popup_close.svg">
			</div>
		</div>
		<div class="mobile_menu_body">
			<ul>
				<li><a href="/#home">Главная</a></li>
				<li><a href="/#sites">Сайты</a></li>
				<li><a href="/resume.php" target="_blank">Резюме</a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="header_wrapper">
			<div class="menu">
				<ul>
					<li><a href="/#home">Главная</a></li>
					<li><a href="/#sites">Сайты</a></li>
					<li><a href="/resume.php" target="_blank">Резюме</a></li>
				</ul>
			</div>
			<div class="contacts">
				<a href="https://t.me/detmetallist" target="_blank"><i class="fa fa-telegram"></i></a>
				<a href="viber://chat?number=%2B380983491438" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/></svg></a>
			</div>
		</div>
		<div class="mobile_header">
			<div class="contacts">
				<a href="https://t.me/detmetallist" target="_blank"><i class="fa fa-telegram"></i></a>
				<a href="viber://chat?number=%2B380983491438" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/></svg></a>
			</div>
			<div class="mobile_menu_button">
				<div class="polosa"></div>
				<div class="polosa"></div>
				<div class="polosa"></div>
				<div class="polosa"></div>
			</div>
		</div>
	</header>
	<canvas class="bg-particles" id="bg-particles" width="1920" height="953"></canvas>
	<section class="main" id="home">
		<div class="main_bg"></div>
		<div class="main_bg_color"></div>
		<div class="main_content">
			<div class="main_content_content">
				<h1>Создание сайтов, лендингов, скриптов</h1>
				<p>Так же роботы для автоматизации рутинных задач как для Web, так и для Android</p>
				<p>Парсеры для автоматического переноса контента между разными платформами и движками</p>
				<p>Торговые роботы как для крипты (binance, bybit и подобные биржи), так и для фиата (metatrader, mql)</p>
			</div>
			<div class="main_menu">
				<ul>
					<li><a href="/#home">Главная</a></li>
					<li><a href="/#sites">Сайты</a></li>
					<li><a href="/resume.php" target="_blank">Резюме</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="sites" id="sites">
		<div class="sites_bg"></div>
		<div class="sites_bg_color"></div>
		<div class="sites_content">
			<div class="sites_content_content">
				<h2>Портфолио</h2>
				<div class="slider">
					<div class="slide_left">
						<img src="/img/slider_arrow_left.png">
					</div>
					<div class="slide_right">
						<img src="/img/slider_arrow_right.png">
					</div>
					<div class="slider_content">
						<div class="slider_content_lenta">
							<?php
								$files = scandir('img/portfolio/thumb-main');
								foreach ($files as $file) {
									$pos1=stripos($file, '.jpg');
									if($pos1){ 
										$link=mb_substr($file, 0, $pos1);
										?>
										<a href="#site-<?php echo $link; ?>">
											<div class="slide_bg"><img src="/img/zoom_in.png"></div>
											<img src="/img/portfolio/thumb-main/<?php echo $file; ?>">
										</a>
									<? }
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="footer_bg"></div>
		<div class="wrapper">
			<div class="left">
				<h2>Создание сайтов, лендингов, скриптов</h2>
				<p>Так же роботы для автоматизации рутинных задач как для Web, так и для Android</p>
				<p>Парсеры для автоматического переноса контента между разными платформами и движками</p>
				<p>Торговые роботы как для крипты (binance, bybit и подобные биржи), так и для фиата (metatrader, mql)</p>
			</div>
			<div class="center">
				<h2>Меню</h2>
				<ul>
					<ul>
						<li><a href="/#home"><i class="fa fa-long-arrow-right"></i>Главная</a></li>
						<li><a href="/#sites"><i class="fa fa-long-arrow-right"></i>Сайты</a></li>
						<li><a href="/resume.php" target="_blank"><i class="fa fa-long-arrow-right"></i>Резюме</a></li>
					</ul>
				</ul>
			</div>
			<div class="right">
				<h2>Контакты</h2>
				<div class="contact_row">
					<a href="https://t.me/detmetallist" target="_blank">
						<i class="fa fa-telegram"></i>Telegram: @detmetallist
					</a>
				</div>
				<div class="contact_row">
					<a href="viber://chat?number=%2B380983491438" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/></svg>
						Viber: +380983491438
					</a>
				</div>
			</div>
		</div>
		<div class="copyright">Copyright © 2024 <span>det_metallist</span>. All rights reserved</div>
	</footer>
</body>
<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/jquery.touchSwipe.min.js"></script>
<script src="/js/particles.js"></script>
<script src="/js/my.js?v=1.03"></script>
</html>