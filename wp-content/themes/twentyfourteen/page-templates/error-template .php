<?php
/**
 * Template Name: Шаблон страницы ошибки отправки формы
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
	                <h3 class="thanks__title">Произошла ошибка. Попробуйте отправить форму ещё раз.</h3>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="thanks__item">
	                <div class="thanks__BtnWrap">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="thanks__orderBtn">Перейти на главную</a>
                    </div>
	            </div>
	        </div>
	    </div>
	</div>	
</div>

<script>
function reload() {
    location = "<?php echo esc_url(home_url('/')); ?>"
};
setTimeout('reload()', 5000);
</script>



<?php

get_footer();