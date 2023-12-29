<?php 
    get_header();
?>

<?php 

if (isset($_GET['attachment_id'])) {
    $attachment_id = intval($_GET['attachment_id']);

    // Output or process the attachment ID as needed
    // echo 'Attachment ID: ' . $attachment_id;
}

$args = array(
    'post_type' => 'gallery', // Replace with your custom post type
    'posts_per_page' => -1, // Retrieve all posts of the specified post type
    'meta_query' => array(
        array(
            'key' => 'related_photos', // Replace with your custom field name
            'value' => $attachment_id,
            'compare' => 'LIKE',
        ),
    ),
);
$post_with_attachment = new WP_Query($args);
// print_r($post_with_attachment);



while ($post_with_attachment->have_posts()) {
    $post_with_attachment->the_post();
    // This post references the attachment in its custom field
    // print_r('Found in post: ' . get_the_title());

}
?>
    <div class="singleview-wrapper">
        
        <div class="singleview-img-cont">
            <?php echo wp_get_attachment_image($attachment_id, 'large'); ?>
            <?php echo $attachment_id?>
        </div>
    </div>

<?php 
    get_footer();
?>