<?php $idcat= get_sub_field('categoria_do_post'); ?>
<div class="posts posts-por-categoria" data-categogt-id="<?php echo $idcat; ?>">
    <?php
        $argsposts = array(
            'post_type'=> 'post', 
            'cat'=> $idcat,
            'posts_per_page' => $qtposts
        );
        $queryposts=new WP_Query($argsposts);
        if ( $queryposts->have_posts() ): 
            while ( $queryposts->have_posts() ):
            $queryposts->the_post(); ?>
            <div class="post">
                <div class="img-post"><?php echo get_the_post_thumbnail(get_the_ID(),'large'); ?></div>  
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