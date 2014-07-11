<?php get_header(); ?>
<?php $options=load_theme_options(); ?>

<!-- start section -->
    <header>
    <section class="intro" id="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php echo $options['jumbotron_h1'];?></h1>
                        <p class="intro-text"><?php echo $options['jumbotron_text'];?></p>
                        <div class="page-scroll">
                            <a href="#know-how" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </header>

<!-- end start section -->

	<?php 

		//function to retrieve all posts in menu
		get_menu_pages();
		
		while(have_posts() ) : the_post(); 

						
		  $bg = get_post_meta($id, "_cmb_test_image", true); 
		  $heading = get_post_meta($id, "_cmb_heading", true); 
		  $subheading = get_post_meta($id, "_cmb_sub-heading", true);  
		  
		  if(get_page_template_slug( $post->ID)!=''):
				include(get_page_template_slug( $post->ID)); 
		  else: ?>
			
	<!-- standard section with no template -->
			    <section class="success" id="<?php echo $post->post_title; ?>">
			        <div class="container">
			            <div class="row">
			                <div class="col-lg-12 text-center">
			                    <h2><?php the_title(); ?></h2>
			                    <hr class="star-light">
			                </div>
			            </div>
			            <div class="row">
			                <div class="col-lg-4 col-lg-offset-2">
			                    <?php the_content(); ?>
			                </div>
			                <div class="col-lg-4">
			                    <p>What to do</p>
			                </div>
			                <div class="col-lg-8 col-lg-offset-2 text-center">
			                    <a href="#" class="btn btn-lg btn-outline">
			                        <i class="fa fa-download"></i> view
			                    </a>
			                </div>
			            </div>
			        </div>
				</section>
	<!-- end standard section -->		
			
		<?php endif; wp_reset_postdata(); ?>    
	<?php  endwhile; ?>
	
	<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Where to find us</h3>
                        <p>Via Roma
                            <br>Roma</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Follow us</h3>
                        <ul class="list-inline">
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><?php bloginfo('name'); ?></h3>
                        <p>Massimo Serafini <a href="http://www.massimolimo.com">Limousine services</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - <?php bloginfo('name'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

<?php get_template_part('modal'); ?>
<?php wp_footer(); ?>

</body>

</html>
