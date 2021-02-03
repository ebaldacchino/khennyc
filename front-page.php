<?php get_header(); ?>
<!-- <h2 class='no-margin-top'>front-page.php</h2> -->

<section class="galleries">
<?php 

	$args = array(
		'post_type' => 'post',
		'category_name' => 'featured' 
	);

	$posts = new WP_Query($args);

	while($posts->have_posts()) {
		$posts->the_post();
?>
	<a class="gallery-preview" href="<?php the_permalink(); ?>"> 
		<img 
			src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
			alt="<?php the_title(); ?>"
		>
	</a>
    
<?php		
	}
?>
</section>
<a href="/contact"><button class="btn">book a session</button></a>
<!-- <div class="pagination">
	<?php echo paginate_links(); ?>
</div> 	 -->
<?php get_footer(); ?>