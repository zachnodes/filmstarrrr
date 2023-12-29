<?php 
    get_header();
?>
<main class="grid-image">
    <?php 
        $relatedPhotos = get_field('related_photos');
        $size = 'large';
        // $gallery_images = get_post_meta(get_the_ID(), 'related_photos', true);
        // print_r($relatedPhotos);

        foreach($relatedPhotos as $photo) { ?>
                <div class="grid-item_reg">
                    <a href="<?php echo get_permalink($photo) ?>"><?php echo wp_get_attachment_image($photo, $size); ?></a>
                </div>
            
            
    <?php }
    ?>
</main>

<?php 
    get_footer();
?>