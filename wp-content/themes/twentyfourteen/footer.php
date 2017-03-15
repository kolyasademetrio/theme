<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

	</div><!-- site-main -->
		</div><!-- content__main -->

		<footer class="footer">
			<?php
				$footer__img = cfs_get_option('options', 'footer__img');
				$footer__phoneTitle = cfs_get_option('options', 'footer__phoneTitle');
				$footer__phone = cfs_get_option('options', 'footer__phone');
				$facebook__link = cfs_get_option('options', 'facebook__link');
				$instagram__link = cfs_get_option('options', 'instagram__link');
				$vkontakte__link = cfs_get_option('options', 'vkontakte__link');
			?>
		   <div class="container">
		           <div class="row">
		               <div class="col-xs-12 footer__itemInner">
		                   <div class="footer__item">
		                       <div class="footer__logoWrap">
								<?php if ( is_front_page() ) { ?>
									<div class="footer__link">
                                       <img src="<?php echo $footer__img; ?>" alt="logo" class="footer__img">
                                   </div>
								<?php
								} else {
								?>
									<a href="<?php echo esc_url(home_url('/')); ?>" class="footer__link">
                                       <img src="<?php echo $footer__img; ?>" alt="logo" class="footer__img">
                                   </a>
								<?php
								}
								?>
		                       </div>
		                                  
		                       <div class="footer__phoneOrder">
		                           <p class="footer__phoneTitle"><?php echo $footer__phoneTitle; ?></p>
		                           <a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', $footer__phone ); ?>" class="footer__phone"><?php echo $footer__phone; ?></a>
		                       </div>
		                                  
		                       <ul class="footer__socialsWrap">
		                           <li class="footer__socialsItem">
		                                <a href="<?php echo $facebook__link; ?>" class="footer__socialsLink fb"></a>
		                            </li>
		                           <li class="footer__socialsItem">
		                                <a href="<?php echo $instagram__link; ?>" class="footer__socialsLink inst"></a>
		                            </li>
		                           <li class="footer__socialsItem">
		                                <a href="<?php echo $vkontakte__link; ?>" class="footer__socialsLink vk"></a>
		                            </li>
		                       </ul>
		                   </div>
		               </div>
		           </div>
		       </div>
		</footer>
	</div><!-- wrapper__main -->

	<?php wp_footer(); ?>
</body>
</html>