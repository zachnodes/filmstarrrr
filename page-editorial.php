<?php
get_header(); 
?>

    
<main class="grid-image">
    <?php 
        $articlePhotos = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'article'
        ));

        while($articlePhotos->have_posts()) {
            $articlePhotos->the_post(); 
            $articleURL = get_field('article_url');
            ?>
            
                <div class="grid-item_reg">
                    <a href="<?php echo $articleURL ?>"> <?php the_post_thumbnail(); ?></a>
                </div>
            
       <?php }
    ?>
</main>

    

<?php
get_footer(); 
?>