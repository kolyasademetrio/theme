<?php
/**
 * Template Name: Шаблон главной страницы
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<!-- mainSection -->
<?php
$mainSection__mainTitle = CFS()->get('mainSection__mainTitle');
$mainSection__subTitle = CFS()->get('mainSection__subTitle');
$mainSection__bg = CFS()->get('mainSection__bg');
?>
<div class="mainSection" style="background: #ba6035 url(<?php echo $mainSection__bg; ?>) center 0 no-repeat;">
    <div class="container mainSection__container">
        <div class="row mainSection__row">
            <div class="col-xs-12 mainSection__innerItem">
                <div class="mainSection__item">
                    <h1 class="mainSection__mainTitle">
                    	<?php echo $mainSection__mainTitle; ?>
                    </h1>
                    <h5 class="mainSection__subTitle">
                    	<?php echo $mainSection__subTitle; ?>
                    </h5>
                    <div class="mainSection__formBlock">
                        <div class="row">
                            <div class="mainSection__formBlockRow">
                            	<?php
									$mainSection__formBlockTitle = CFS()->get('mainSection__formBlockTitle');
									$mainSection__subTitle = CFS()->get('mainSection__subTitle');
									$placeholder__name = CFS()->get('placeholder__name');
									$placeholder__email = CFS()->get('placeholder__email');
									$placeholder__phone = CFS()->get('placeholder__phone');
									$input__text = CFS()->get('input__text');
								?>
                                <form action="<?php echo get_template_directory_uri(); ?>/form-handler.php" class="mainSection__form" method="post">
                                	<!-- Скрытые поля, которые содержат данные из UTM метки -->
  									<input type="hidden" name="source" class="source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>" />
  									<input type="hidden" name="term" class="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
  									<input type="hidden" name="medium" class="medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>" />
  									<input type="hidden" name="campaign" class="campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
  									<input type="hidden" name="content" class="content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>" />

                                    <div class="col-xs-12">
                                        <h5 class="mainSection__formBlockTitle">
                                        	<?php echo $mainSection__formBlockTitle; ?>
                                        </h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 mainSection__formBlockInnerItem">
                                        <div class="mainSection__formBlockItem">
                                            <input type="text" placeholder="<?php echo $placeholder__name; ?>" name="name" req>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 mainSection__formBlockInnerItem">
                                        <div class="mainSection__formBlockItem">
                                            <input type="text" placeholder="<?php echo $placeholder__email; ?>" name="email" req>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 mainSection__formBlockInnerItem">
                                        <div class="mainSection__formBlockItem">
                                            <input type="text" placeholder="<?php echo $placeholder__phone; ?>" name="phone" req>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 mainSection__formBlockInnerItem">
                                        <div class="mainSection__formBlockItem">
                                            <input type="submit" value="<?php echo $input__text; ?>" name="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- mainSection -->
                
<!-- whyWe -->
<?php
	$whyWe__bg = CFS()->get('whyWe__bg');
	$whyWe__title = CFS()->get('whyWe__title');
	$whyWe__innerItem = CFS()->get('whyWe__innerItem');
?>
<div class="whyWe" style="background-color: <?php echo $whyWe__bg; ?>;">
	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h5 class="whyWe__title text-center">
                	<?php echo $whyWe__title; ?>
                </h5>
            </div>
        </div>
    </div>

    <div class="container whyWe__container">
        <div class="row whyWe__row">

		<?php
		if (isset($whyWe__innerItem)) :
			foreach ($whyWe__innerItem as $whyWeItem) :
		?>
			
			<div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 whyWe__innerItem">
                <div class="whyWe__item">
                    <div class="whyWe__header text-center">
                        <img src="<?php echo $whyWeItem['whyWe__img']; ?>" alt="" class="whyWe__img">
                    </div>
                    <div class="whyWe__footer text-center">
                    	<?php echo $whyWeItem['whyWe__footer']; ?>
                    </div>
                </div>
            </div>

		<?php
			endforeach;
		endif;
		?>
            
        </div>
    </div>
</div>
<!-- whyWe End -->
                
<!-- weProduce -->
<?php
	$weProduce__title = CFS()->get('weProduce__title');
	$weProduce__bg = CFS()->get('weProduce__bg');
?>
<div class="weProduce" style="background: #fff url(<?php echo $weProduce__bg; ?>) center 0 no-repeat;">
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="weProduce__title text-center"><?php echo $weProduce__title; ?></div>
	        </div>
	    </div>
	</div>

	<div class="container weProduce__container">
	    <div class="row weProduce__row">
		<?php
			$weProduce__innerItem = CFS()->get('weProduce__innerItem');
			$weProduce_footer_bg = CFS()->get('weProduce_footer_bg');
		?>

		<?php
		if (isset($weProduce__innerItem)) :
			foreach ( $weProduce__innerItem as $weProduce__innerItem__item ) :
		?>

			<div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 weProduce__innerItem">
	            <div class="weProduce__item">
	                <div class="weProduce__header text-center">
	                    <img src="<?php echo $weProduce__innerItem__item['weProduce__img']; ?>" alt="" class="weProduce__img">
	                </div>
	                <div class="weProduce__footer text-center" style="background: #383d44 url(<?php echo $weProduce_footer_bg; ?>) center 0 no-repeat;">
	                	<?php echo $weProduce__innerItem__item['weProduce__footer']; ?>
	                </div>
	            </div>
	        </div>

		<?php
			endforeach;
		endif;
		?>

	    </div>
	</div><!-- weProduce__container -->
                
    <div class="container">
    	<?php
    		$weProduce__subtitle = CFS()->get('weProduce__subtitle');
    		$weProduce__orderBtn = CFS()->get('weProduce__orderBtn');
    	?>
        <div class="row">
            <div class="col-xs-12">
                <h5 class="weProduce__subtitle text-center"><?php echo $weProduce__subtitle; ?></h5>
                <div class="weProduce__orderBtnWrap text-center">
                    <a href="#popup_1" class="weProduce__orderBtn text-center"><?php echo $weProduce__orderBtn; ?></a>
                    <div id="popup_1" class="popup mfp-hide">
                        <form action="<?php echo get_template_directory_uri(); ?>/form-handler.php" method="post">
							<!-- Скрытые поля, которые содержат данные из UTM метки -->
							<input type="hidden" name="source" class="source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>" />
							<input type="hidden" name="term" class="term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
							<input type="hidden" name="medium" class="medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>" />
							<input type="hidden" name="campaign" class="campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
							<input type="hidden" name="content" class="content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>" />

                            <div class="popup__header">
                                <div class="popup__title">Станьте партнером<br>прямо сейчас!</div>
                                <div class="popup__info">оставьте свои данные, чтобы<br> мы могли связаться с вами:</div>
                            </div>
                            <div class="popup__footer">
                                <div>
                                	<input type="text" name="name" class="popup__inputText" placeholder="Введите Имя" req>
                                </div>
                                <div>
                                	<input type="text" name="phone" class="popup__inputText" placeholder="Введите Телефон" req>
                                </div>
                                <div>
                                	<input type="submit" value="Станьте партнером сейчас" class="popup__inputSubmit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- weProduce End -->
                
<!-- services -->
<?php
	$services__bg = CFS()->get('services__bg');
	$services__title = CFS()->get('services__title');
	$services__innerItem = CFS()->get('services__innerItem');
?>
<div class="services" style="background: #fff url(<?php echo $services__bg; ?>) center 0 no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="services__title text-center">
                	<?php echo $services__title; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container services__container">
        <div class="row services__row">
			
		<?php
		if (isset($services__innerItem)) :
			foreach ($services__innerItem as $services__innerItem__item):
			?>

			<div class="col-md-3 col-sm-3 col-xs-6 col-xs-100 services__innerItem">
                <div class="services__item">
                    <div class="services__header text-center">
                        <img src="<?php echo $services__innerItem__item['services__img']; ?>" alt="" class="services__img">
                    </div>
                    <div class="services__footer text-center">
                    	<?php echo $services__innerItem__item['services__footer']; ?>
                    </div>
                </div>
            </div>
				
			<?php
			endforeach;
		endif;
		?>

        </div>
    </div><!-- services__container -->
</div>
<!-- services End -->
                
<!-- gallery -->
<?php
	$gallery__bg = CFS()->get('gallery__bg');
	$gallery__title = CFS()->get('gallery__title');
	$gallery__slide = CFS()->get('gallery__slide');
?>
<div class="gallery" style="background: #fff url(<?php echo $gallery__bg; ?>) center 0 no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="gallery__title text-center">
                	<?php echo $gallery__title; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container gallery__container">
        <div class="row gallery__row">
            <div class="col-xs-12 gallery__innerItem">
                <div class="gallery__slider flexslider">
                    <ul class="slides">

					<?php
					if (isset($gallery__slide)) :
						foreach ($gallery__slide as $gallery__slide__item):
						?>

						<li class="gallery__slide">
                            <a href="<?php echo $gallery__slide__item['gallery__link']; ?>" class="gallery__link">
                                <img src="<?php echo $gallery__slide__item['gallery__img']; ?>" alt="" class="gallery__img">
                            </a>
                        </li>
							
						<?php
						endforeach;
					endif;
					?>

                    </ul>
                </div>
            </div>
        </div>
    </div><!-- gallery__container -->
</div>
<!-- gallery End -->
                
<!-- partnerReviews -->
<?php
	$partnerReviews__bg = CFS()->get('partnerReviews__bg');
	$partnerReviews__title = CFS()->get('partnerReviews__title');
	$partnerReviews__slideItem = CFS()->get('partnerReviews__slideItem');
?>
<div class="partnerReviews" style="background-color: <?php echo $partnerReviews__bg; ?>;"><!-- #ebebeb -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="partnerReviews__title text-center">
                	<?php echo $partnerReviews__title; ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="container partnerReviews__container">
        <div class="row partnerReviews__row">
            <div class="col-xs-12 partnerReviews__innerItem">
                <div class="partnerReviews__item">
                    <div class="partnerReviews__flexslider">
                        <ul class="slides partnerReviews__slides">

                    	<?php
                    	if (isset($partnerReviews__slideItem)) :
                        	foreach ($partnerReviews__slideItem as $partnerReviews__slideItem__item):
                        	?>

                        	<li class="partnerReviews__slideItem">
                                <p class="partnerReviews__slideContent">
                                	<?php echo $partnerReviews__slideItem__item['partnerReviews__slideContent']; ?>
                                </p>
                            </li>
                        		
                        	<?php
                        	endforeach;
                    	endif;
                    	?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partnerReviews End -->
                
<!-- partners -->
<?php
	$partners__bg = CFS()->get('partners__bg');
	$partners__title = CFS()->get('partners__title');
	$partners__innerItem = CFS()->get('partners__innerItem');
	$partners__item__bg = CFS()->get('partners__item__bg');
?>
<div class="partners" style="background-color: <?php echo $partners__bg; ?>;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="partners__title text-center">
                	<?php echo $partners__title; ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="container partners__container">
        <div class="row partners__row">
			<?php
        	if (isset($partners__innerItem)) :
        		foreach ($partners__innerItem as $partners__innerItem__item):
        	?>

				<div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
					<div class="partners__item text-center" style="background-color: <?php echo $partners__innerItem__item['partners__item__bg']; ?>;"><!-- #e0e0e0 -->
						<img src="<?php echo $partners__innerItem__item['partners__img']; ?>" alt="" class="partners__img">
					</div>
				</div>

				<?php
				endforeach;
        	endif;
        	?>


            <!-- <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_1.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_2.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_3.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_4.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_5.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_6.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_7.jpg" alt="" class="partners__img">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 col-xs-50 col-xs-100-380 partners__innerItem">
                <div class="partners__item text-center">
                    <img src="img/partners/photos/partners_8.jpg" alt="" class="partners__img">
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- partners End -->


<?php

get_footer();