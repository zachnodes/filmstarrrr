<?php 
get_header();
?>
    <main class="about-wrapper">
        <div class="aboutme">
            <div class="grid-item main-img">
                <?php the_post_thumbnail();  ?>
            </div>
            <div class="grid-item main-content">
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="about-filmstarrrr">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="grid-item gallery">

                <?php 
                    $aboutMePhotos = new WP_Query(array(
                        'post_type' => 'gallery',
                        'posts_per_page' => 3,
                        'orderby' => 'rand'
                    ));

                    while($aboutMePhotos->have_posts()) {
                        $aboutMePhotos->the_post(); ?>

                            <div class="flex-item about-photo">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>

                   <?php }
                ?>
            </div>
        </div>
    </main>
    <div class="getintouch">
        <div class="getintouchcont">
            <div>
                <h2>Let's Get In Touch</h2>
            </div>
            <div>
                <p>Have an exciting project you need help with? Email me! my inbox is always open.</p>
            </div>
            <div>
                <a href="mailto:mayersz01@outlook.com"><button class="contactbtn">Contact</button></a>
            </div>
        </div>
    </div>
<?php 
get_footer();
?>