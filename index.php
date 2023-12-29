<?php 
    // get_header();
?>
index
<?php 
if (isset($_GET['attachment_id'])) {
    $attachment_id = intval($_GET['attachment_id']);

    // Output or process the attachment ID as needed
    // echo 'Attachment ID: ' . $attachment_id;
}
?>
    <div class="singleview-wrapper">
        
        <div class="singleview-img-cont">
        <?php echo wp_get_attachment_image($attachment_id, 'large'); ?>
        </div>
    </div>

<?php 
    get_footer();
?>

