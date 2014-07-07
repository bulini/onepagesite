<?php 
/*
Template Name: About
*/
?>
    <section class="color-three" id="know-how" style="background:<?php echo get_post_meta($post->ID,'background_color',true); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <hr class="star-light">
                    <h3><?php the_slogan(); ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                	<?php the_content(); ?>
                </div>
                <div class="col-lg-4">
                	<?php the_subcontent(); ?>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#services" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i>View our services
                    </a>
                </div>
            </div>
        </div>
    </section>