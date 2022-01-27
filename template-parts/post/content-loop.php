<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$a = [
    'post_type' => $args && $args['post_type'] ? $args['post_type'] : 'post',
    'post_per_page' => $args && $args['post_per_page'] ? $args['post_per_page'] : get_option('posts_per_page'),
    'paged' => $paged
];

$query = new WP_Query($a);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        the_title('<h2>', '</h2>');
        the_content();
    endwhile;
    the_posts_pagination();
else :
    e('Sorry, no posts matched your criteria.', 'temita');
endif;

wp_reset_postdata();
