	<div class="timeline-badge">
		<i class="fa fa-user"></i>
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

