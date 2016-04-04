<?php
global $post;
$tags = wp_get_post_tags($post->ID);
$sport = "barbell.png";
$color = 'bg-aqua';
foreach ($tags as $tag ) {
	if ($tag->slug == 'swim') {
		$sport = 'swim.png';
		$color = 'bg-blue';
		break;
	} else if ($tag->slug == "run") {
		$sport = 'run.png';
		$color = 'bg-green';
		break;
	}
}
?>
 	<div class="timeline-badge">
		<i class="<?php echo $color ?>"><img src="<?php echo get_template_directory_uri() . '/images/' . $sport ?>" width="32" height="32"/></i>
	</div>
	<div class="timeline-panel">
		<div class="timeline-heading">

			<h4 class="timeline-title">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				<small class="text-muted pull-right"><i class="fa fa-clock-o"></i><?php the_time(" Y-m-d H:i:s");?></small>
			</h4>
		</div>
		<div class="timeline-body">
			<?php the_content(''); ?>
		</div>
	</div>

