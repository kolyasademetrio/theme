<?php
if(session_id() == '') {
	session_start();// открываем сессию
	$ref_wp = $_SESSION['ref_wp'];
}
/**
 * Template Name: Шаблон страницы благодарности
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<div class="thanks" style="background-image: url(<?php //echo $bg_first; ?>)">
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="thanks__item">
	                <h3 class="thanks__title text-center">Произошла ошибка. Попробуйте отправить форму ещё раз.</h3>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="container">
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="thanks__item">
	                <div class="thanks__BtnWrap text-center">
                	<?php if ( $ref_wp == esc_url(home_url('/')) ) { ?>
                    	<a href="<?php echo $ref_wp; ?>" class="thanks__orderBtn">Назад на главную</a>
                    <?php } else { ?>
						<a href="<?php echo $ref_wp; ?>" class="thanks__orderBtn">Назад на сайт</a>
                    <?php } ?>
                    </div>
	            </div>
	        </div>
	    </div>
	</div>	
</div>

<script>
function reload() {
    location = "<?php echo $ref_wp; ?>"
};
setTimeout('reload()', 5000);
</script>


<?php

get_footer();