<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

                <section class="theme-dark padding-omit">
              
                    <div class="l-container" id="intro">

                        <article class="content">

                            <h1 class="uppercase fade-in one"><?php the_field('reflections_of_motion'); ?></h1>
                            <div class="white-link fade-in one"><?php the_content(); ?></div>
                            <div class="learn-more" >
                                <svg class="white-line">
                                    <line class="line-animate" x1="0" y1="0" x2="100" y2="0"/>
                                    Sorry, your browser does not support inline SVG.
                                </svg>
                                <a class="learn-more-desktop fade-in one" href="http://localhost:8888/projectsoul/services/">learn more</a>
                            </div>

                        </article>
                        <div class="the-yellow-rectangle rellax" data-rellax-speed="-2"></div>
                    </div>

                </section>

                <?php $about_page = get_page_by_title( 'about us' );?>

                <section class="theme-light">

                    <div class="l-container">

                        <article class="m-overlap">
                        
                            <?php echo get_the_post_thumbnail($about_page); ?>

                            <div class="title-line-keep-beside">
                                    <div class="hr-line-black"><hr></div>
                
                                    <div class="title-we-story-tell">we story<br> tell<br> through<br> dance</div>
                            </div>

                            <div class="learn-more-link"><?php $content = $about_page->post_content; echo $content;?></div>
                            
                            <div class="small-yellow-rectangle"></div>


                        </article>

                    </div>

                </section>

                <section class="theme-dark fill-out" id="sponsor">

                    <div class="l-container">
                        
                        <div class="hr-line"><hr></div>
                        <div class="text-beside-line">some of our</div><div class="text-beside-line-break">clients include</div>

                            <div class="sponsor-class hide-slider-on-desktop">
                                

                                <?php foreach(range(1,12) as $count): ?>

                                    <?php if(get_field('sponsor_logo_' . $count)): ?>

                                        <div><img src="<?php the_field('sponsor_logo_' . $count); ?>"/></div>

                                    <?php endif; ?>

                                <?php endforeach; ?>
                                
                                
                            </div>
                        <div class="style-white-dots"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_White_Dots-01.svg" width="70%" height="80"></div>    
                                
                            
                        

                    </div>

                </section>


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


                

                <section class="theme-light">


                        <div class="l-container my-style">

                            <div class="style-black-dots"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_Black_Dots-01.svg" width="70%" height="80"></div>

                            <div class="our-style-for-page-title"><?php the_field('our_styles'); ?></div>

                            <div class="our-style-slick-slider">

                                    <?php foreach(range(1,10) as $count): ?>
                                            <?php if(get_field('styles_image_'.$count)): ?>
                                                <div class="text-close">
                                                    <img src="<?php the_field('styles_image_'.$count); ?>"/>
                                                    <h1><?php the_field('style_dancing_type_excerpt_'.$count); ?></h1>
                                                    <p><?php the_field('style_description_'.$count); ?></p>
                                                </div>
                                            <?php endif ?>
                                    <?php endforeach; ?>

                            </div>

                            <div class="row swiper-container">
                                <div class="swiper-wrapper">
                                    

                                    <?php foreach(range(1,10) as $count): ?>
                                            <?php if(get_field('styles_image_'.$count)): ?>
                                                
                                        
                                                <div class="swiper-slide" style="background-image:url('<?php the_field('styles_image_'.$count); ?>')">
                                                    <div class="slide-inner-content">
                                                        <h1><?php the_field('style_dancing_type_excerpt_'.$count); ?></h1>
                                                        <p><?php the_field('style_description_'.$count); ?></p> 
                                                    </div>
                                            
                                                </div>
                                                  
                                                
                                            <?php endif ?>
                                    <?php endforeach; ?>

                                </div>
                                <!--Add Arrow-->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                            
                        </div> 

                </section>      

                <section class="theme-light">

                    <div class="l-container">

                        <div class="fit-the-page">

                            <div class="the-yellow-rectangle"></div>

                            <img src="<?php the_field('contact_us_image'); ?>"/>
                            
                            <div class="yellow-small-box"> </div>

                            <div class="link-styling"><?php the_field('contact_us_prompt'); ?></div>

                            

                        </div>

                            

                    </div>

                </section>        
                
            <?php endwhile ?>

            <?php endif ?>

        </main><!-- #main -->

    </div><!--#primary -->

    <?php get_footer();