<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div class="container">
	<div class="row">
		<div class="col-xs-12">
			
			<?php
			if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / ');
			
			// Include the page content template.
			get_template_part( 'content', 'page' );
			?>
				
		</div><!-- col-xs-12 -->
	</div><!-- row -->
</div><!-- container -->
	


<?php
get_footer();
