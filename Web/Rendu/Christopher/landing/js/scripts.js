$(document).ready(function(){$('.wp1').waypoint(function(){$('.wp1').addClass('animated fadeInUp');},{offset:'75%'});$('.wp2').waypoint(function(){$('.wp2').addClass('animated fadeInUp');},{offset:'75%'});$('.wp3').waypoint(function(){$('.wp3').addClass('animated fadeInRight');},{offset:'75%'});$('.flexslider').flexslider({animation:"slide"});$('.single_image').fancybox({padding:4,});$('[data-toggle="tooltip"]').tooltip();$(function(){$(window).scroll(function(){var scroll=$(window).scrollTop();if(scroll>=20){$('section.navigation').addClass('fixed');$('header').css({"border-bottom":"none","padding":"44px 0","height":"115px"});$('header .member-actions').css({"top":"26px",});$('header .navicon').css({"top":"34px",});}else{$('section.navigation').removeClass('fixed');$('header').css({"border-bottom":"solid 1px rgba(255, 255, 255, 0.2)","padding":"50px 0"});$('header .member-actions').css({"top":"41px",});$('header .navicon').css({"top":"48px",});}});});$(function(){$('a[href*=#]:not([href=#])').click(function(){if(location.pathname.replace(/^\//,'')===this.pathname.replace(/^\//,'')&&location.hostname===this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+ this.hash.slice(1)+']');if(target.length){$('html,body').animate({scrollTop:target.offset().top},1000);return false;}}});});});