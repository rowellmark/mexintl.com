			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>

	<div class="glob-form-wrap relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Form") ) : ?><?php endif ?>
	</div><!-- end of glob form -->
	<footer class="footer">
		<div class="footer-container">

			<div class="footer-logo">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Logo") ) : ?><?php endif ?>
			</div>

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Contact Info") ) : ?><?php endif ?>

			<div class="footer-nav" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
			</div>
		
			<div class="footer-copyright" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Disclaimer") ) : ?><?php endif ?>

		

				<p class="copyright">&copy; <?php echo date('Y') ?> <span>Mexico International Real Estate</span>. All rights reserved. <a href="/sitemap">Sitemap</a> <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
			</div>
			<div class="copyright-logos flex justify-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
				<div class="dClogos flex items-center justify-center">
					<i class="ai-font-eho"></i>
					<i class="ai-font-realtor-mls"></i>
				</div>
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/copy1.png" alt="AMPI" width="44" height="49">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/copy2.png" alt="CRS" width="35" height="41">

			</div>


		</div>		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
