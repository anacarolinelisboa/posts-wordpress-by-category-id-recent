<?php
$postssel=array();
if( have_rows('posts') ):  
    while( have_rows('posts') ) : the_row(); 
        array_push($postssel, get_sub_field('post'));
    endwhile;
endif;
?>
<div class="posts posts-por-id">
    <?php
        $argsposts = array(
            'post_type'=> 'post',
            'post__in'=> $postssel,
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