<?php get_header(); ?>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Contact Info") ) : ?><?php endif ?>

<section id="hero" class="relative">
	<div class="slideshow relative has-after">
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slideshow") ) : ?><?php endif ?>

		<div class="slideshow-logo absolute w-100 h-100">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Logo") ) : ?><?php endif ?>
		</div>
	
	</div><!-- end of slideshow -->

	<div class="hp-quick-search absolute" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Quick Search") ) : ?><?php endif ?>
	</div><!-- end of quick search -->
</section><!-- end of hero -->

<!-- New Properties -->
<section class="property-wrap relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: New Properties") ) : ?><?php endif ?>
</section>
<!-- New Properties -->
<!-- Central Merida -->
<section class="property-wrap relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Central Merida") ) : ?><?php endif ?>
</section>
<!-- Central Merida -->
<!-- Beach Properties -->
<section class="property-wrap relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Beach Properties") ) : ?><?php endif ?>
</section>
<!-- Beach Properties -->

<!-- North Merida -->
<section class="property-wrap relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: North Merida") ) : ?><?php endif ?>
</section>
<!-- North Merida -->

<!-- Greater Yucatan -->
<section class="property-wrap relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Greater Yucatan") ) : ?><?php endif ?>
</section>
<!-- Greater Yucatan -->

<!-- Haciendas & Ranchos -->
<section class="property-wrap relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Haciendas & Ranchos") ) : ?><?php endif ?>
</section>
<!-- Haciendas & Ranchos -->


<section id="hp-welcome-area" class="relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Welcome") ) : ?><?php endif ?>
</section><!-- end of welcome area -->
<section id="hp-meet-the-team" class="relative">
	<div class="meet-the-team-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Meet The Team") ) : ?><?php endif ?>
	</div>
</section><!-- end of meet the team -->

<section id="hp-instagram" class="relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Instagram") ) : ?><?php endif ?>
</section>
<?php get_footer(); ?>
