<?php get_header(); ?> 

<section class="galleries">
<?php 
	while(have_posts()) {
		the_post();
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
<div class="pagination">
	<?php echo paginate_links(); ?>
</div>
<?php get_footer(); ?>