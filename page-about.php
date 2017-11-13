<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package projectsoul
 */

get_header(); ?>

	<div id="primary" class="content-area">

		  <main id="main" class="site-main">
          
          
             <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <section>
                        <div class="l-container" id="the-about-page">

                             <h1><?php the_field('title_'); ?></h1>
                             <div class="white-line-about-us"><hr></div>
                             <div class="the-yellow-rectangle rellax" data-rellax-speed="-2"></div>
                                
                        </div>         
                </section>
                <section class="theme-light">
                        <div class="l-container" id="about-us-overlap">
                                <div class="black-line-about-us-container">
                                        <div class="black-line-about-us"><hr></div>
                                        <h1 class="about-us"><?php the_title(); ?></h1>
                                </div>        
                                <div class="image-overlay-yellow-box">
                                        <div class="image-about-shift-left"> <?php echo get_the_post_thumbnail(); ?></div>
                                        
                                </div>
                                <div class="c"><?php the_field('about_us_full_content'); ?></div>
                                <div class="the-yellow-rectangle-backof-image rellax" data-rellax-speed="-2"></div>
                        </div>        
                               
                </section>

                <?php $home_page = get_page_by_title( 'home' ); ?>
                <section class="theme-light">
                    <div class="l-container">
                        <div class="hr-line-black-test">
                            <div class="black-line-about-us"><hr></div>
                            <h1 class="our-team">our team</h1>
                        </div>
                        
                        <div class="our-style-slick-slider">
                            <?php foreach(range(1,12) as $count): ?>

                                <?php if(get_field('styles_image_' . $count, $home_page)): ?>

                                    <div>
                                        <img src="<?php the_field('styles_image_' . $count, $home_page); ?>"/>
                                        <?php the_field('dancer_name_' . $count, $home_page); ?>
                                        <?php the_field('style_dancing_type_' . $count, $home_page); ?>
                                        <?php the_field('style_description_' . $count, $home_page); ?>
                                    </div>

                                <?php endif; ?>

                            <?php endforeach; ?>
                        </div>
                        <div class="style-black-dots-about"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_Black_Dots-01.svg" width="70%" height="80"></div>
                    </div>
                </section>  
            
            <?php endwhile ?>  

            <?php endif ?>  

          

		  </main><!-- #main -->

	</div><!-- #primary -->

<?php

get_footer();