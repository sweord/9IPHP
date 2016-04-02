<?php
	$layout = of_get_option('side_bar');
	$layout = (empty($layout)) ? 'right_side' : $layout;

	get_header();
?>
<!--//	if($layout == 'left_side'){ ?>-->
<!--		<aside class="col-md-3 hidden-xs hidden-sm">-->
<!--			<div id="sidebar">-->
<!--				--><?php //dynamic_sidebar( 'sidebar_single'); ?>
<!--			</div>-->
<!--		</aside>-->
<!--	--><?php //} ?>
	<div class="col-md-1 hidden-xs hidden-sm"></div>
	<section id='main' class='<?php echo ($layout == 'single') ? 'col-md-12' : 'col-md-9'; ?>' >
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php specs_set_post_views(get_the_ID()); ?>
		<?php get_template_part( 'inc/post-format/single', get_post_format() ); ?>
		<?php endwhile; endif;?>
	</section>
	<div class="col-md-3 hidden-xs hidden-sm"></div>
	<!--侧边栏-->
<!--	--><?php //if($layout == 'right_side'){ ?>
<!--		<aside class="col-md-3 hidden-xs hidden-sm">-->
<!--			<div id="sidebar">-->
<!--				--><?php //dynamic_sidebar( 'sidebar_single'); ?>
<!--			</div>-->
<!--		</aside>-->
<!--	--><?php //} ?>
<?php get_footer(); ?>