<?php
$layout = of_get_option('side_bar');
$layout = (empty($layout)) ? 'right_side' : $layout;

get_header(); ?>

		<!--[if lt IE 8]>
		<div id="ie-warning" class="alert alert-danger fade in visible-lg">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<i class="fa fa-warning"></i> 请注意，本博客不支持低于IE8的浏览器，为了获得最佳效果，请下载最新的浏览器，推荐下载 <a href="http://www.google.cn/intl/zh-CN/chrome/" target="_blank"><i class="fa fa-compass"></i> Chrome</a>
            </div>
		<![endif]-->
<!--		--><?php //if($layout == 'left_side'){ ?>
<!--		<aside class="col-md-3 hidden-xs hidden-sm">-->
<!--			<div id="sidebar">-->
<!--				--><?php //dynamic_sidebar( 'sidebar_home'); ?>
<!--			</div>-->
<!--		</aside>-->
<!--		--><?php //} ?>
        <section id='main' class='<?php echo ($layout == 'single') ? 'col-md-12' : 'col-md-9'; ?>' >


			<header class="archive-header well">
				<h1 class="archive-title">
					分类：<?php echo single_cat_title( '', false );?>
				</h1>
				<div class="archive-meta">
					<?php if ( category_description() ) : // Show an optional category description ?>
						<?php echo category_description(); ?>
					<?php else: ?>
						<!--							以下是分类 --><?php //echo single_cat_title( '', false );?><!-- 下的所有文章-->
					<?php endif;?>
				</div>
			</header>

			<!--文章列表模块-->
	        <?php
				if ( have_posts() ) {
					while ( have_posts() ){
						the_post();
						get_template_part( 'inc/post-format/content', get_post_format() );
					}
				}else{
			?>
			<article class="alert alert-warning"><?php _e('非常抱歉，没有相关文章。'); ?></article>
			<?php } ?>
			<!--首页文章列表模块-->
			<!--分页-->
			<?php specs_pages(5);?>
        </section>
		<div class="col-md-2 hidden-xs hidden-sm"></div>
        <!--侧边栏-->
		<?php if($layout == 'right_side'){ ?>
		<aside class="col-md-3 hidden-xs hidden-sm">
			<div id="sidebar">
				<?php dynamic_sidebar( 'sidebar_home'); ?>
			</div>
		</aside>
		<?php } ?>
<?php get_footer(); ?>
