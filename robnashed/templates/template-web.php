<?php
/*
Template Name: Web / Home
*/


   
   $arg = [
    'post_type' => 'post',
    'post_status' => 'publish',  
   'posts_per_page' => 4,
   ];
   $posts = new WP_Query($arg);
   


get_header(); ?>


 <div class="col-3">
            <div class="container">

<?php if ($posts->have_posts()) : ?>
    <?php // TO SHOW THE PAGE CONTENTS?>
    <?php while ($posts->have_posts()) : $posts->the_post(); ?>

    

    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('', array('class' => 'article-listing__img'));?>
            <?php else: ?>
               
            <?php endif; ?>
        </a>
    </div>

    <?php endwhile; //resetting the page loop?>
    <?php wp_reset_postdata(); //resetting the post data?>

   <?php endif; ?>

<!--PAGE CONTENT-->

            </div>

</div>




<?php get_footer(); ?>