<?php 
/*
Template Name: Section page
*/
?>
<section id="<?php echo strtolower($post->post_title); ?>" class="white content-section text-center" style="background:#efefef">

        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
             </div>

        </div>
</section>