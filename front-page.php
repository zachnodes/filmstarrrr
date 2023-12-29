<?php
get_header(); 
?>

    
<main class="grid-image">
    <?php 
        $homepagePhotos = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'gallery',
        ));

        while($homepagePhotos->have_posts()) {
            $homepagePhotos->the_post(); ?>
            
                <div class="grid-item_reg">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                </div>
            
       <?php }
    ?>
</main>

    

<?php
get_footer(); 
?>