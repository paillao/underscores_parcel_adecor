<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores_parcel
 */
 get_header();
?>
		<main>
		  <div class="grid grid--large">
	
	<!-- <div class="grid__cell grid__cell-c2-r2 grid__cell--padded">
		  <div class="frame">
		  </div>
	  </div> -->

			
	<?php $args = ["p" => 8, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c1-r1">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-1"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>
		
	<?php $args = ["p" => 19, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c2-r1">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-2"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>
		
	<?php $args = ["p" => 21, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c3-r1">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-3"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>
		
	<?php $args = ["p" => 28, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c4-r1">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-4"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>
		
	<?php $args = ["p" => 30, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c1-r2">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-5"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>

	<?php $args = ["p" => 32, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c2-r2">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-6"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>
		
	<?php $args = ["p" => 64, "post_type" => "any"]; $the_query = new WP_Query($args); if
		($the_query->have_posts()): while ($the_query->have_posts()):
		$the_query->the_post(); $feat_image_url = wp_get_attachment_url(
		get_post_thumbnail_id() ); ?>
		
		<div class="grid__cell grid__cell-c3-r2">
		  <div class="grid__cell-img">
			<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)" data-item="item-7"></div>
		  </div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>
		
	<div class="grid__cell grid__cell-c4-r2 grid__cell--padded">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e("Skip to content", "underscores_parcel"); ?></a>
		  <header id="masthead" class="site-header">
				  <div class="site-branding">
					  <?php the_custom_logo(); if (is_front_page() && is_home()): ?>
						  <h1 class="site-title"><a href="<?php echo esc_url(home_url("/")); ?>" rel="home"><?php bloginfo("name"); ?></a></h1>
						  <?php else: ?>
						  <p class="site-title"><a href="<?php echo esc_url(home_url("/")); ?>" rel="home"><?php bloginfo("name"); ?></a></p>
						  <?php endif;
						  $underscores_parcel_description = get_bloginfo("description","display");
							  if ($underscores_parcel_description || is_customize_preview()): ?>
							  <p class="site-description"><?php echo $underscores_parcel_description;
							  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							  ?></p>
							  <?php endif;?>
					  </div><!-- .site-branding -->
				  <nav id="site-navigation" class="main-navigation">
					  <?php wp_nav_menu(["theme_location" => "menu-1", "menu_id" => "primary-menu"]); ?>
				  </nav><!-- #site-navigation -->
			  </header><!-- #masthead -->
	
	  </div>
	</div>
						  
		  <div class="content">
			  <?php $args = ["p" => 8, "post_type" => "any"]; $the_query = new WP_Query($args);
			  if ($the_query->have_posts()):
				  while ($the_query->have_posts()):
					  $the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
					 <div class="content__item" id="item-1">
	  					<span class="content__item-number oh"><span class="oh__inner">01</span></span>
	  					<h2 class="content__item-heading oh">
							<span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
							<br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
							</span>
	  					</h2>
	  					<p class="content__item-text">
	  					<?php echo wp_strip_all_tags( get_the_content() ); ?>
	  					</p>
	  					<a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>
	  					<nav class="slide-nav">
							<div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
							<div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
	  					</nav>
						</div>
			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); ?>
			  <?php else: ?>
				  <p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			  <?php endif; ?>  
		
		
		<?php $args = ["p" => 19, "post_type" => "any"]; $the_query = new WP_Query($args);
		  if ($the_query->have_posts()):
			  while ($the_query->have_posts()):
				  $the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
				 <div class="content__item" id="item-2">
					  <span class="content__item-number oh"><span class="oh__inner">02</span></span>
					  <h2 class="content__item-heading oh">
						<span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
						<br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
						</span>
					  </h2>
					  <p class="content__item-text">
					  <?php echo wp_strip_all_tags( get_the_content() ); ?>
					  </p>
				<a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>
					  <nav class="slide-nav">
						<div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
						<div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					  </nav>
					</div>
		  <?php endwhile; ?>
		  <?php wp_reset_postdata(); ?>
		  <?php else: ?>
			  <p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		  <?php endif; ?>  

		<?php $args = ["p" => 21, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()):
				while ($the_query->have_posts()):
					$the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
				   <div class="content__item" id="item-3">
						<span class="content__item-number oh"><span class="oh__inner">03</span></span>
						<h2 class="content__item-heading oh">
						<span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
						<br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
						</span>
						</h2>
						<p class="content__item-text">
						<?php echo wp_strip_all_tags( get_the_content() ); ?>
						</p>
		<a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>

						<nav class="slide-nav">
						  <div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
						  <div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
						</nav>
					  </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  		
			
			<?php $args = ["p" => 28, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()):
				while ($the_query->have_posts()):
					$the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
				   <div class="content__item" id="item-4">
						<span class="content__item-number oh"><span class="oh__inner">04</span></span>
						<h2 class="content__item-heading oh">
						  <span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
						  <br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
						  </span>
						</h2>
						<p class="content__item-text">
						<?php echo wp_strip_all_tags( get_the_content() ); ?>
						</p>
					 <a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>

						<nav class="slide-nav">
						  <div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
						  <div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
						</nav>
					  </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  		
			
		<?php $args = ["p" => 30, "post_type" => "any"]; $the_query = new WP_Query($args);
		if ($the_query->have_posts()):
			while ($the_query->have_posts()):
				$the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			   <div class="content__item" id="item-5">
					<span class="content__item-number oh"><span class="oh__inner">05</span></span>
					<h2 class="content__item-heading oh">
						<span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
						<br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
						</span>
					</h2>
					<p class="content__item-text">
					<?php echo wp_strip_all_tags( get_the_content() ); ?>
					</p>
					 <a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>

					<nav class="slide-nav">
					  <div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					  <div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</nav>
				  </div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
			<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>  		
	
	<?php $args = ["p" => 32, "post_type" => "any"]; $the_query = new WP_Query($args);
		if ($the_query->have_posts()):
			while ($the_query->have_posts()):
				$the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			   <div class="content__item" id="item-6">
					<span class="content__item-number oh"><span class="oh__inner">06</span></span>
					<h2 class="content__item-heading oh">
					  <span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
					  <br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
					  </span>
					</h2>
					<p class="content__item-text">
					<?php echo wp_strip_all_tags( get_the_content() ); ?>
					</p>
					 <a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>

					<nav class="slide-nav">
					  <div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					  <div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</nav>
				  </div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
			<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?> 
		
	<?php $args = ["p" => 64, "post_type" => "any"]; $the_query = new WP_Query($args);
		if ($the_query->have_posts()):
			while ($the_query->have_posts()):
				$the_query->the_post(); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			   <div class="content__item" id="item-7">
					<span class="content__item-number oh"><span class="oh__inner">07</span></span>
					<h2 class="content__item-heading oh">
					  <span class="oh__inner"><?php echo wp_strip_all_tags( the_title() ); ?>
					  <br/><span class="estracto"><?php echo wp_strip_all_tags( the_excerpt() );?></span>
					  </span>
					</h2>
					<p class="content__item-text">
					<?php echo wp_strip_all_tags( get_the_content() ); ?>
					</p>
					 <a class="content__item-link oh" href="<?php bloginfo( 'url' ) ?>/cotizar"><span class="oh__inner"><i class="fa-solid fa-paper-plane"></i> Cotizar</span></a>
		
					<nav class="slide-nav">
					  <div class="slide-nav__img slide-nav__img--prev" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					  <div class="slide-nav__img slide-nav__img--next" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</nav>
				  </div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
			<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>  		 		
		
			<button class="back">
			  <h4>Inicio</h4>
			  <svg viewBox="0 0 50 9" width="100%">
				<path d="M0 4.5l5-3M0 4.5l5 3M50 4.5h-77"></path>
			  </svg>
			</button>
			
			<nav class="grid grid--mini">
			<?php $args = ["p" => 8, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
				<div class="grid__cell grid__cell-c1-r1">
					<div class="grid__cell-img">
						<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</div>
			 	</div> 
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  

			<?php $args = ["p" => 19, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
				<div class="grid__cell grid__cell-c2-r1">
					<div class="grid__cell-img">
						<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</div>
				 </div> 
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  

			<?php $args = ["p" => 21, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
				<div class="grid__cell grid__cell-c4-r1">
					<div class="grid__cell-img">
						<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</div>
				 </div> 
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  

			<?php $args = ["p" => 28, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
				<div class="grid__cell grid__cell-c2-r1">
					<div class="grid__cell-img">
						<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</div>
				 </div> 
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  			  
			
			<?php $args = ["p" => 30, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
				<div class="grid__cell grid__cell-c1-r2">
					<div class="grid__cell-img">
						<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</div>
				 </div> 
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  	
			
			<?php $args = ["p" => 32, "post_type" => "any"]; $the_query = new WP_Query($args);
			if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
				<div class="grid__cell grid__cell-c2-r2">
					<div class="grid__cell-img">
						<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
					</div>
				 </div> 
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
			<?php endif; ?>  			  
		
		<?php $args = ["p" => 64, "post_type" => "any"]; $the_query = new WP_Query($args);
		if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); 
			$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id()); ?>		
			<div class="grid__cell grid__cell-c3-r2">
				<div class="grid__cell-img">
					<div class="grid__cell-img-inner" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
				</div>
			 </div> 
		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else: ?>
			<p><?php esc_html_e("Disculpa, aún no hay items de este tipo"); ?></p>
		<?php endif; ?>  			  		 
			
			</nav>
		  </div>
	</main>

<?php get_footer();
