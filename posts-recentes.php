<div class="posts posts-recentes">
    <?php
        $argsposts = array(
            'post_type'=> 'post', 
            'posts_per_page' => $qtposts
        );
        $queryposts=new WP_Query($argsposts);
        if ( $queryposts->have_posts() ): 
            while ( $queryposts->have_posts() ):
            $queryposts->the_post(); ?>
            <div class="post">
                <div class="img-post"><a href="<?php the_permalink();?>" class="display-block no-text-decoration"><?php echo get_the_post_thumbnail(get_the_ID(),'large'); ?></a></div>  
                <div class="infos">
                    <h3 class="title"><a href="<?php the_permalink();?>" class="display-block no-text-decoration"><?php echo the_title(); ?></a></h3>  
                    <div class="desc"><?php the_excerpt(); ?></div>
                </div>
            </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();  
    ?>
</div> 