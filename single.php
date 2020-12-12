<?php get_header(); ?>
<div class="container content">
        <div class="main block">
                <article class="post">
                <?php
              if ( have_posts() ) :
	           while ( have_posts() ) : the_post(); ?>
                       <h2>
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a>
                       </h2>
                       <p class="meta">Posted at <?php the_time('F j'); ?> by <?php the_author(); ?></p>
                       <?php if(has_post_thumbnail(  )): ?>
                         <div class="post-img">
                         <?php the_post_thumbnail(); ?>
                         </div>
                       <?php endif; ?>
                       <p><?php the_content(); ?></p>
            
                   <?php endwhile;
                   
                else: 
                echo "There are no post";?>

                <?php endif; ?>
                   </article>
                   <?php  comments_template(); ?>
        </div>
       <?php get_footer(); ?>