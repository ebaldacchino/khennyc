<?php get_header(); ?> 
<h2 class='no-margin-top'>
            <?php the_title(); ?></h2> 
    <?php
        while(have_posts()) {
            the_post();
    ?>
    <section class="single-gallery">
        <i class="fas fa-chevron-left"></i>
            <article>
                <?php the_content();
            }   
         ?>
            </article>
         <i class="fas fa-chevron-right"></i>
    </section>
    <a href="/contact"><button class="btn">book a session</button></a> 
<?php get_footer(); ?>