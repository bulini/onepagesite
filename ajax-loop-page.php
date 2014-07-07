<?php 
/*
Template Name: Ajax Loop
*/
?>
<section id="<?php echo strtolower($post->post_title); ?>" class="items content-section text-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" id="portfolio-response">
            </div>
        </div>
</section>