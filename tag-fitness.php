<?php
global $query_string;
$total = 20;
$posts = query_posts($query_string . '&orderby=date&showposts=' . $total);
if (have_posts()) {
    echo('<div class="col-md-6">');
    echo('<ul class="timeline">');
    while (have_posts()) {
        echo('<li class="timeline-inverted">');
        $inverted = !$inverted;
        the_post();
        get_template_part('inc/post-format/content-fitness', get_post_format());
        echo('</li>');
        if (++$count >= $total / 2)
            break;
    }
    echo("</ul>");
    echo('</div>');

    echo('<div class="col-md-6">');
    echo('<ul class="timeline">');
    while (have_posts()) {
        echo('<li class="timeline-inverted">');
        $inverted = !$inverted;
        the_post();
        get_template_part('inc/post-format/content-fitness', get_post_format());
        echo('</li>');
    }
    echo('</ul>');
    echo('</div>');
}