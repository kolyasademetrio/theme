$(document).ready(function(){

	/* проверка заполнения полей формы */
	(function(){
		$('form').submit(function(){
		    var $required = $(this).find('[req]'),
		    	$inputEmail = $(this).find('input[name="email"]'),
		        error = false,
		        pattern;

			function isValidEmailAddress(emailAddress) {
			    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
			    return pattern.test(emailAddress);
			}

			$required.each(function(){
				if(!$(this).val()) // tests that each required value does not equal blank, you could put in more stringent checks here if you wish.
		        {
		        	$(this).addClass('borderRed');
		        	$(this).parent().addClass('posrel');

		        	if(!$(this).next().is('.error')) {
		        		$(this).after('<div class="error" style="z-index:9999;position:absolute;padding:3px;border:1px solid red;border-radius:2px;top:100%;left:50%;margin-left:-100px;width:200px;color:#000;background-color:#fff;white-space: nowrap;text-align:center;">Заполните поле ' + $(this).attr('placeholder') + '!</div>');
		        	}

		            error = true; // if any inputs fail validation then the error variable will be set to true;
		        } else {
		        	$(this).removeClass('borderRed');
		        	$(this).next('.error').remove();
		        }
			});

		    $required.each(function(){
				if(!$(this).val()) // tests that each required value does not equal blank, you could put in more stringent checks here if you wish.
		        {
		            return false;
		        }
			});

			if ($inputEmail.val()) {
				if( !isValidEmailAddress( $inputEmail.val() ) ) {
					if(!$inputEmail.next().is('.error')) {
						$inputEmail.parent().addClass('posrel');
		        		$inputEmail.after('<div class="error" style="z-index:9999;position:absolute;padding:3px;border:1px solid red;border-radius:2px;top:100%;left:50%;margin-left:-100px;width:200px;color:#000;background-color:#fff;white-space: nowrap;text-align:center;">Введите корректный E-mail!</div>');
		        	} else {
		        		$inputEmail.next('.error').html('Введите корректный E-mail!');
		        	}
					$inputEmail.addClass('borderRed');
				} else {
					$inputEmail.removeClass('borderRed');
				}
			}


		    if(error) // if error is true;
		    {
		        return false; // stop the form from being submitted.
		    }

		});

		$('form').find('[req]').each(function(){
			$(this).focus(function(){
				$(this).next('.error').remove();
				$(this).removeClass('borderRed');
			});
		});
	})();
	/* проверка заполнения полей формы */	

	/*--------------------------------- функция для адаптивного меню -----------------------------*/

		function menuAdapt(menuBtn, menu, header) {

			var $menuBtn = menuBtn,
				$menu = menu,
				$header = header,
				menuHeight;

			$menuBtn.on('click', function(){
				menuHeight = $header.height();
				$menu.css('top', menuHeight);
				$menu.slideToggle();
			});

			$(window).resize(function(){
				if (window.matchMedia('(max-width: 768px)').matches && $($menu).is(':visible')) {
					$($menu).hide();
				} else if (window.matchMedia('(min-width: 768px)').matches) {
					$($menu).show();
				}
			});

		}

		menuAdapt($('.header__navMenu .glyphicon.glyphicon-menu-hamburger'), $('.header__navList'), $('.header__navMenu'));
	
	/*--------------------------------- функция для адаптивного меню End -------------------------*/



	/*--------------------------------- функция для якоря -------------------------*/

		function ancor (ancor, goal) {

			$(ancor).on('click', function(e){
			  $('html,body').stop().animate({ scrollTop: $(goal).offset().top }, 2000);
			  e.preventDefault();
			});

		}

		// ancor($('#choice'), $('.choice'));
		// ancor($('#feedback'), $('.feedback'));
		// ancor($('#toPartners'), $('.toPartners'));
		// ancor($('#ourContacts'), $('.ourContacts'));
	
	/*--------------------------------- функция для якоря Конец -------------------------*/



	/*--------------------------------- функция для вкладок -----------------------------*/

		function getTabs(tabsClass, sectionsClass, classActive){
			var $tabs = $('.' + tabsClass),
				$sections = $('.' + sectionsClass);

			$sections.not(':first').addClass('choice__posAbs');

			$tabs.click(function(){
				$tabs.removeClass(classActive).eq($(this).index()).addClass(classActive);
				$sections.addClass('choice__posAbs').eq($(this).index()).removeClass('choice__posAbs');
			}).eq(0).addClass(classActive);
		}
		
		/* вызов функции вкладок */
		// getTabs('choice__tab', 'choice__slider', 'active');
	
	/*--------------------------------- функция для вкладок End -------------------------*/



	/*--------------------------------- функция для карусели -------------------------*/

		function getCarousel(list, element, arrowRight, arrowLeft) {
			var $list = $('.' + list),
				$element = $('.' + element),
				$arrowRight = $('.' + arrowRight),
				$arrowLeft = $('.' + arrowLeft),
				$carouselSimple__wrap = $('.carouselSimple__wrap'),
				elemWidth = $carouselSimple__wrap.outerWidth(true);

			$element.width(elemWidth);
			$list.css({'left' : -elemWidth}).prepend($element.last());

			$(window).resize(function(){

				var $list = $('.' + list),
					$element = $('.' + element),
					$arrowRight = $('.' + arrowRight),
					$arrowLeft = $('.' + arrowLeft),
					$carouselSimple__wrap = $('.carouselSimple__wrap'),
					elemWidth = $carouselSimple__wrap.outerWidth(true);

				$element.width(elemWidth);
				$list.css({'left' : -elemWidth});

			});

			function nextSlide() {
				$list.animate({'margin-left' : -elemWidth}, 500, function(){
					$('.' + element).first().appendTo($list);
					$list.css({'margin-left' : 0});
				});
			}

			function prevSlide() {
				$list.animate({'margin-left' : elemWidth}, 500, function(){
					$('.' + element).last().prependTo($list);
					$list.css({'margin-left' : 0});
				});
			}

			$arrowRight.click(function(){
				nextSlide();
			});

			$arrowLeft.click(function(){
				prevSlide();
			});
		}

		/* вызов функции для карусели carouselSimple */
		// getCarousel('carouselSimple__list_1', 'carouselSimple__item_1', 'carouselSimple__arrowRight_1', 'carouselSimple__arrowLeft_1');
		// getCarousel('carouselSimple__list_2', 'carouselSimple__item_2', 'carouselSimple__arrowRight_2', 'carouselSimple__arrowLeft_2');
		// getCarousel('carouselSimple__list_3', 'carouselSimple__item_3', 'carouselSimple__arrowRight_3', 'carouselSimple__arrowLeft_3');

	/*--------------------------------- функция для карусели End -------------------------*/


	/*--------------------------------- функция для выравнивания высоты колонок -------------------------*/

		function setMaxHeight(elem) {
		    var $elem = $('.' + elem),
		        arrAllHeight = [],
		        maxHeight;
		    
		    $elem.each(function(){
		      arrAllHeight.push($(this).height());
		    });
		    
		    maxHeight = Math.max.apply(null, arrAllHeight);
		    
		    $elem.height(maxHeight);
		}


		/* вызов функции для выравнивания высоты колонок */
		// if (window.matchMedia('only screen and (max-width : 992px)').matches) {

		// 	setMaxHeight('itemQuestion');
		// 	setMaxHeight('itemAnswer');

		// }

		// $(window).resize(function(){

		// 		if ( window.matchMedia('only screen and (max-width : 992px)').matches ) {

		// 			setMaxHeight('itemQuestion');
		// 	  		setMaxHeight('itemAnswer');

		// 		}

		// });

		// setMaxHeight('serviceFooter');
	
	/*--------------------------------- функция для выравнивания высоты колонок End -------------------------*/	  

});