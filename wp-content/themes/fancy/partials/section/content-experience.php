<?php
    
	$name = get_post_field('post_name');
  
?>
	
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="<?php echo $name?>">
<div class="my-auto">
	<h2 class="mb-5"><?php the_title()?></h2>
	<div><?php the_content()?></div>

	<?php
		// The Query
		$args = array('post_type'=>'experience');
		$the_query = new WP_Query( $args );
			
		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();

			get_template_part('partials/experience/content','default');
		}
		
		/* Restore original Post Data */
		wp_reset_postdata();
	?>

</div>
</section>

<hr class="m-0">