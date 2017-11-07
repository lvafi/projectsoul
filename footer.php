<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package projectsoul
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		

		<section class="theme-dark">
				<div class="l-container">
						<?php echo do_shortcode( '[contact-form-7 id="86" title="Contact form 1"]' );  ?>	
				</div>			
		</section>
		
		<section class="theme-dark">
			 <div class="l-container">
						<i class="fa fa-facebook-official fa-2x" aria-hidden="true" ></i>
						<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
						<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
						<i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
			 
			 <div class="footer-container">
					<div>
						<h2>604.682.7286</h2>
						<h2>kim@projectsoul.com</h2>
					</div>
					<div>
						<h2>2017@projectsoul</h2>
						<h2>Web Design by Pivot & Pilot</h2>

					</div> 
			</div>
			</div>	
    </section>	

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
