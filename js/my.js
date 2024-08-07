$(document).ready(function(){
	/* Анимация шапки при скролле */
	if($(window).scrollTop()>=100){
		$('header').addClass('fixed').stop().css('top','-100px').animate({'top':'0px'},300);
	}
	$(document).scroll(function(){
		if($(window).scrollTop()>=100){
			if($('header').hasClass('fixed')==false){
				$('header').addClass('fixed').stop().css('top','-100px').animate({'top':'0px'},300);
			}
		} else {
			$('header').removeClass('fixed');
		}
	});
	/* Конец анимации шапки при скролле */

	/* Клик по меню в шапке */
	$('.menu a[href^="/#"], footer a[href^="/#"], .main_menu a[href^="/#"]').click(function () { 
	    elementClick = $(this).attr("href").slice(1);
	    console.log(elementClick);
	    destination = $(elementClick).offset().top;
	       $('html,body').animate( { scrollTop: destination }, 1100 );
	    return false;
   	});
	$('.menu a[href^="#"], footer a[href^="#"], .main_menu a[href^="#"]').click(function () { 
	    elementClick = $(this).attr("href");
	    console.log(elementClick);
	    destination = $(elementClick).offset().top;
	       $('html,body').animate( { scrollTop: destination }, 1100 );
	    return false;
   	});
   	/* Конец клика по меню в шапке */

   	/* Главный слайдер */
   	var slides_left=parseInt($(".slider_content_lenta").css('left'));
   	var slider_width=$(".slider_content_lenta").width();
   	var screen_width=$(document).width();
   	var slide_width=$(".slider_content_lenta a").width();
	var slide_margin=parseInt($(".slider_content_lenta a").css('margin-right'))*2;
	$(".slide_right").click(function(){
		slides_right();
	})
	$(".slide_left").click(function(){
		slides_leftt();
	})
	function slides_leftt(){
		if(-(slides_left+slide_width+slide_margin)>slide_margin/2){
			slides_left=slides_left+slide_width+slide_margin;
		} else {
			slides_left=-slide_margin/2;
		}
		$(".sites_content .slider_content_lenta").stop().animate({'left':slides_left},200);
	}
	function slides_right(){
		if(Math.abs(slides_left-slide_width-slide_margin)<Math.abs(slider_width-screen_width)){
			slides_left=slides_left-slide_width-slide_margin;
		} else {
			slides_left=-(slider_width-screen_width+slide_margin);
		}
		$(".sites_content .slider_content_lenta").stop().animate({'left':slides_left},200);
	}
	$(".slider_content").swipe({
		swipeLeft:slides_right,
	    swipeRight:slides_leftt,
	    excludedElements: "",
	    threshold:20
	})
	/* Конец главного слайдера */

	/* Слайдер левой ленты */
   	var slides_left_top=parseInt($(".popup_slider_lenta_left").css('top'));
   	var slider_left_height=$(".slider_content_lenta a").length*($(".popup_slider_lenta a").height()+parseInt($(".popup_slider_lenta_right a").css('margin-bottom')));
   	var screen_height=$(".popup_slider_content").height();
   	var slide_left_height=$(".popup_slider_lenta_left a").height();
	var slide_left_margin=parseInt($(".popup_slider_lenta_left a").css('margin-bottom'));
	$(".popup_slider_left_slides .slide_up").click(function(){
		slides_left_up();
	})
	$(".popup_slider_left_slides .slide_down").click(function(){
		slides_left_down();
	})
	function slides_left_up(){
		if($(window).height()<$(window).width()&&$(window).width()>1020){
			if(-(slides_left_top+slide_left_height+slide_left_margin)>slide_left_margin){
				slides_left_top=slides_left_top+slide_left_height+slide_left_margin;
			} else {
				slides_left_top=-slide_left_margin;
			}
			$(".popup_slider_lenta_left").stop().animate({'top':slides_left_top},200);
		}
	}
	function slides_left_down(){
		if($(window).height()<$(window).width()&&$(window).width()>1020){
			if(Math.abs(slides_left_top-slide_left_height-slide_left_margin)<Math.abs(slider_left_height-screen_height)){
				slides_left_top=slides_left_top-slide_left_height-slide_left_margin;
			} else {
				slides_left_top=-(slider_left_height-screen_height+slide_left_margin);
			}
			$(".popup_slider_lenta_left").stop().animate({'top':slides_left_top},200);
		}
	}
	if($(window).height()<$(window).width()&&$(window).width()>1020){
		$(".popup_slider_content_left").swipe({
			swipeUp:slides_left_down,
		    swipeDown:slides_left_up,
		    excludedElements: "",
		    threshold:20
		})
	}
	var site_name_old="";
	var site_name="";
	$(".popup_slider_lenta_left a").click(function(){
		site_name=$(this).attr('href').slice(6);
		if(site_name!=site_name_old){
			$(".popup_slider_lenta_left a").removeClass('active');
			$(this).addClass('active');
			zagruzit_lentu(site_name);
			zagruzit_screen(site_name,site_name+'-main');
			zagruzit_video(site_name);
			$(".knopki .site_href").attr('href','https://'+site_name+'.oleg-portfolio.pp.ua');
		}
		site_name_old=site_name;
	})
	/* Конец слайдера левой ленты */

	/* Слайдер правой ленты */
   	var slides_right_top=parseInt($(".popup_slider_lenta_right").css('top'));
   	var slider_right_height=$(".popup_slider_lenta_right").height();
   	var slide_right_height=$(".popup_slider_lenta_right a").height();
	var slide_right_margin=parseInt($(".popup_slider_lenta_right a").css('margin-bottom'));
	$(".popup_slider_right_slides .slide_up").click(function(){
		slides_right_up();
	})
	$(".popup_slider_right_slides .slide_down").click(function(){
		slides_right_down();
	})
	function slides_right_up(){
		if($(window).height()<$(window).width()&&$(window).width()>1020){
			if(screen_height<$(".popup_slider_lenta_left").height()){
				if(-(slides_right_top+slide_right_height+slide_right_margin)>slide_right_margin){
					slides_right_top=slides_right_top+slide_left_height+slide_right_margin;
				} else {
					slides_right_top=-slide_right_margin;
				}
				$(".popup_slider_lenta_right").stop().animate({'top':slides_right_top},200);
			}
		}
	}
	function slides_right_down(){
		if($(window).height()<$(window).width()&&$(window).width()>1020){
			if(screen_height<$(".popup_slider_lenta_right").height()){
				if(Math.abs(slides_right_top-slide_right_height-slide_right_margin)<Math.abs(slider_right_height-screen_height)){
					slides_right_top=slides_right_top-slide_right_height-slide_right_margin;
				} else {
					slides_right_top=-(slider_right_height-screen_height+slide_right_margin);
				}
				$(".popup_slider_lenta_right").stop().animate({'top':slides_right_top},200);
			}
		}
	}
	if($(window).height()<$(window).width()&&$(window).width()>1020){
		$(".popup_slider_content_right").swipe({
			swipeUp:slides_right_down,
		    swipeDown:slides_right_up,
		    excludedElements: "",
		    threshold:20
		})
	}
	var screen_name_old="";
	$(document).on('click','.popup_slider_lenta_right a',function(){
		var screen_name=$(this).attr('href').slice(8);
		if(screen_name!=screen_name_old){
			$(".popup_slider_lenta_right a").removeClass('active');
			$(this).addClass('active');
			zagruzit_screen(site_name,screen_name);
		}
		screen_name_old=screen_name;
	})
	/* Конец слайдера правой ленты */

	/* Нажатие на картинку в главном слайдере */
	$(".sites_content .slider_content_lenta a").click(function(){
		$('body').addClass('noscroll');
		$(".popup").fadeIn(300);
		site_name=$(this).attr('href').slice(6);
		$(".popup_slider_lenta_left a").removeClass('active');
		$('.popup_slider_lenta_left a[href="#site-'+site_name+'"]').addClass('active');
		slides_left_top=-($(".sites_content .slider_content_lenta a").index(this)*(slide_left_height+slide_left_margin))+slide_left_height;
		console.log(slider_left_height);
		if(slides_left_top>0){
			slides_left_top=0;
		} else if(Math.abs(slides_left_top-slide_left_height-slide_left_margin)>Math.abs(slider_left_height-screen_height)){
			slides_left_top=-(slider_left_height-screen_height+slide_left_margin);
		}
		$(".popup_slider_lenta_left").css('top',slides_left_top);
		$(".knopki .site_href").attr('href','https://'+site_name+'.oleg-portfolio.pp.ua');
		zagruzit_lentu(site_name);
		zagruzit_screen(site_name,site_name+'-main');
		zagruzit_video(site_name);
		slider_left_height=$(".popup_slider_lenta_left").height();
		return false;
	})
	$(".popup .popup_close").click(function(){
		$('body').removeClass('noscroll');
		$(".popup").fadeOut(300);
	})
	/* Конец нажатия на картинку в главном слайдере */

	$(".popup_video .popup_close").click(function(){
		$(".popup_video").fadeOut(300);
	})

	function zagruzit_lentu(site_name){
		$.ajax({
			type: "POST",
			url: "/lenta.php",
			data: {
				'site_name':site_name,
			},
			contentType: "application/x-www-form-urlencoded; charset=ISO-8859-1",
			dataType: 'HTML',
			success: function(data){
				$(".popup_slider_lenta_right").html(data);
				slider_right_height=$(".popup_slider_lenta_right").height();
				slides_right_top=-10;
				if($(window).height()<$(window).width()&&$(window).width()>1020){
					$(".popup_slider_lenta_right").css('top','-10px');
				}
				var slides_right_kol=$(".popup_slider_lenta_right a").length;
				if($(window).height()<$(window).width()&&$(window).width()>1020){
					if((slide_left_height+slide_left_margin)*slides_right_kol<screen_height){
						$(".popup_slider_right_slides .slide_up, .popup_slider_right_slides .slide_down").fadeOut(0);
					} else {
						$(".popup_slider_right_slides .slide_up, .popup_slider_right_slides .slide_down").fadeIn(0);
					}
				}
			},
			error: function(xhr, status, error) {
				alert(xhr.responseText + '|\n' + status + '|\n' +error);
			}
		})
	}

	function zagruzit_screen(site_name, screen_name){
		$(".popup_full_slide_content").html("<img src='/img/portfolio/fullsize/"+site_name+"/"+screen_name+".jpg'>");
		setTimeout(function() {
			var img_height=$(".popup_full_slide_content img").height();
			if(img_height<screen_height){
				$(".popup_full_slide_content img").addClass('content_center');
			} else {
				$(".popup_full_slide_content img").removeClass('content_center');
			}
		}, 500);
	}

	function zagruzit_video(site_name){
		$.ajax({
			type: "POST",
			url: "/video.php",
			data: {
				'site_name':site_name,
			},
			contentType: "application/x-www-form-urlencoded; charset=ISO-8859-1",
			dataType: 'HTML',
			success: function(data){
				if(data==1){
					$('.video_href').fadeIn(200);
					$(".popup_video video").attr('src','/video/'+site_name+'/'+site_name+'.mp4');
				} else {
					$('.video_href').fadeOut(200);
				}
			},
			error: function(xhr, status, error) {
				alert(xhr.responseText + '|\n' + status + '|\n' +error);
			}
		})
	}

	$(".video_href").click(function(){
		$(".popup_video").fadeIn(300).css("display","flex");
		$(".popup_video video").trigger('play');
		return false;
	})

	/* Скроллинг левого и правого слайдера в попапе с портфолио */
	$(document).on('wheel','.popup_slider_content_left',function(e){
		if(e.originalEvent.deltaY < 0){
			slides_left_up();
		} else {
			slides_left_down();
		}
	})
	$(document).on('wheel','.popup_slider_content_right',function(e){
		if(e.originalEvent.deltaY < 0){
			slides_right_up();
		} else {
			slides_right_down();
		}
	})
	/* Конец скроллинга левого и правого слайдера в попапе с портфолио */

	$(".mobile_menu_button").click(function(){
		$(".mobile_menu_popup").animate({'right':'0px'},300);
		$("body").addClass('noscroll');
	})
	$(".mobile_menu_popup .popup_close, .mobile_menu_popup li a").click(function(){
		$(".mobile_menu_popup").animate({'right':'-1030px'},300);
		$("body").removeClass('noscroll');
	})
});