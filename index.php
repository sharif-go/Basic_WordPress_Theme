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
                             <a href="<?php the_permalink(); ?>">
                         <?php the_post_thumbnail(); ?>
                         </a>
                         </div>
                       <?php endif; ?>
                       <p><?php echo wp_trim_words( get_the_content(), 50); ?></p>
                       <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                   <?php endwhile;
                   
                else: 
                echo "There are no post";?>

                <?php endif; ?>
                   </article>
        </div>
     <?php get_footer(); ?>