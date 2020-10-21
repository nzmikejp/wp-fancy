<?php

    $sectionIDs = get_field('sections');

    // The Query
    $args = array(
        'post_type' => 'section',
        'post__in' => $sectionIDs,
        'orderby' => 'post__in',   
    );

    $the_query = new WP_Query( $args );
    
    // The Loop
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('partials/section/content', 'default');
    }

    /* Restore original Post Data */
    wp_reset_postdata();

?>
