<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary-about" class="home-page hero-content">
		<div class="main-content-about" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="main-block">
		<div class="sub-block">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them. 
				Here is a brief overview of our offered services.
			</p>
				<article class="content-strategy">
					<div class="icon-image"></div>
					<h3>Content Strategy</h3><!-- /wp:heading -->
					<p>Developing a content strategy is the process of planning, creating, 
						distributing, and measuring content in all its online forms to achieve 
						predefined business and marketing goals.
					</p>
				</article>

				<article class="infuencer-mapping">
					<h3>Influencer Mapping</h3>
					<p>Influencer mapping is the process of measuring the influence of an 
						influencer’s voice in the digital world. It can help you figure out the 
						right influencers with whom you should engage.
					</p>
					<div class="icon-image"></div>
				</article>

				<article class="social-media-strategy">
					<h3>Social Media Strategy</h3>
					<div class="icon-image"></div>
					<p>Without a strategy, you might be posting on social media platforms for the 
						sake of posting. Without understanding what your goals are, who your target 
						audience is, and what they want, it’ll be hard to achieve results on social media.  
						Whether you want to&nbsp;or to grow your own brand through social media, developing 
						a social media marketing strategy is essential.
					</p>
				</article>

				<article>
					<h3>Design and Development</h3>
					<p>The design and development process should examine all the potential risks and hurdles 
						you will need to overcome to get the product to market. It should review progress and 
						decide whether to proceed. You'll also need to put appropriate resources in place and 
						consider factors such as price and demand.
					</p>
					<div class="icon-image"></div>
				</article>

				<p>Interested in working with us</p>
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			




		</div>

	</section>

<?php get_footer(); ?>
