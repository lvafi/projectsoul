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

          <?php if (have_posts() ): ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    
                <?php $home_page = get_page_by_title( 'home' );?>
                    <section>
                        <div class="l-container" id="intro">
                            <article class="content-1">
                                <?php $home_page = get_page_by_title( 'home' ); ?>
                                <div class="uppercase fade-in one"><h1><?php the_field('reflections_of_motion', $home_page); ?> </h1></div>
                                <div class="fade-in one intro-content-services"><?php $mycontent = $home_page->post_content; echo $mycontent;?> </div>
                            </article>
                        </div>
                    </section> 

                    <section class="theme-light test-container">
                        <div class="l-container">
                            <article >
                                <h1 class="title-services"><?php the_field('our_services'); ?></h1> 
                                
                                <div class="custom-MOBILE"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-choreographed-MOBILE-05.svg" width="100%" height="80"></div> 
                                <div class="custom-DESKTOP"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-choreographed-DESKTOP-12.svg" width="100%" height="80"></div> 
                                <p class="our-services-content"><?php the_field('our_services_content_1')?></p>

                                <div class="custom-MOBILE"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-custom-MOBILE-07.svg" width="100%" height="80"></div>
                                <div class="custom-DESKTOP"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-custom-DESKTOP-14.svg" width="100%" height="80"></div>
                                <p class="our-services-content"><?php the_field('our_services_content_2')?></p>

                                <div class="custom-MOBILE"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-freestyle-MOBILE-06.svg" width="100%" height="80"></div>
                                <div class="custom-DESKTOP"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-freestyle-DESKTOP-13.svg" width="100%" height="80"></div>
                                <?php the_field('our_services_content_3')?>
                            </article>
                        </div>
                    </section>


                    <section class="theme-light">
                        <div class="l-container">
                            <article>

                                <h1 class="title-approche"><?php the_field('our_approche');?></h1>

                                <div class="flex-container">

                                    <div class="number">1</div>

                                    <div class="flex-bottom"><?php the_field('our_approche_content_1'); ?></div>

                                
                                </div>

                                <div class="image-shifted-to-right"><img src="<?php the_field('our_approche_image_1') ?>" /></div>


                                
                                <div class="flex-container">

                                    <div class="number">2</div>

                                    <div class="flex-bottom"><?php the_field('our_approche_content_2'); ?></div>
                                
                                </div>
                               

                                
                                <div class="flex-container">

                                    <div class="number">3</div>

                                    <div class="flex-bottom"><?php the_field('our_approche_content_3'); ?></div>
                                
                                </div>
                               

                                <div class="image-shifted-to-left"><img src="<?php the_field('our_approache_image_3') ?>" /></div>

                                
                                <div class="flex-container">

                                    <div class="number">4</div>

                                    <div class="flex-bottom"><?php the_field('our_approche_content_4'); ?></div>

                                </div>

                            </article>
                        </div>
                    </section> 

                    <div class="">
                        <h1><?php the_field('our_styles');?></h1>
                    </div>

                    <section class="theme-light yellow-block">

                    <div class="l-container">
                        
                        <div class="box-1">
                                <div class="yellow-slider">

                                    <?php $events = tribe_get_events( array( 'posts_per_page' => 5 ) ); ?>
                                    
                                    <?php foreach($events as $event): ?>

                                        <div class="text-close">

                                            <div class=flex-slick-slider-header-positioning>

                                                <div class="upcoming-events">upcoming events</div>
                                                <div class="event-dates"><?php echo tribe_get_start_date( $event ); ?></div>

                                            </div>
                                            <div class="img-overlay">
                                            <div class="m-overlay">&nbsp;</div>
                                            <?php echo get_the_post_thumbnail($event); ?>
                                            </div> 

                                            <p><?php echo( $event->post_title );?></p>

                                            <p><?php echo tribe_get_address($event). " " .tribe_get_city($event); ?></p>

                                        </div>
                                

                                    <?php endforeach ?>
                                    
                                    
                                </div> <!--yellow-slider -->

                                <div id="yellow-slider-controls"></div>
                        
                        </div> <!--end box-1-->
                        <div class="box-2">
                            <div class="slider-for">
                                <?php foreach($events as $event): ?>
                                    <?php echo get_the_post_thumbnail($event); ?>
                                <?php endforeach ?>
                            </div>
                        </div> <!--end box2-->

                    </div>

                </section>  

			    <?php endwhile; // End of the loop.?>   
          <?php endif ?> 
		  </main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();