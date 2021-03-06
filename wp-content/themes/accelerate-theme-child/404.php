<?php
/**
 * The template for displaying 404 page
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


	<div class="container-404">
    <h3>Uh Oh, What Happened?</h3>
        <img src="https://i.postimg.cc/5yfyvm5R/error-404-45ac9b.png" alt="ice-cream">           
    </div>

    <div class="error-404">
        <a class="button" href="<?php echo site_url('/homepage/') ?>">HOME SWEET HOME</a>
    </div>

<?php get_footer(); ?>