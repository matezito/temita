<?php
 
$a = [
    'post_type' => $args && $args['post_type'] ? $args['post_type'] : 'post',
];

$query = new WP_Query( $a );

if($query->have_posts()): 
    while($query->have_posts()) : $query->the_post();
        the_title('<h2>', '</h2>');
        the_content();
    endwhile;
else:
    e( 'Sorry, no posts matched your criteria.', 'temita' );
endif;

wp_reset_postdata();