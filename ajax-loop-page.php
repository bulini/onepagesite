<?php 
/*
Template Name: Ajax Loop
*/
?>
<section id="<?php echo strtolower($post->post_title); ?>" class="items content-section text-center" style="background:<?php echo get_post_meta($post->ID,'background_color',true); ?>">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <hr class="star-primary">
                    <h3><?php the_slogan(); ?></h3>
                </div>
            </div>
            <div class="row" id="<?php echo strtolower($post->post_title); ?>-response" class="items">
            </div>
        </div>
</section>