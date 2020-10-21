<?php /* Template Name: Multi Sections */ ?>

<?php get_header()?>

    <div class="container-fluid p-0">

        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/page/content', 'multi-sections');
            } // end while
        ?>

    </div>

<?php get_footer()?>
