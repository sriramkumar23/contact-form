<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<div class="container">
		<h2>Contact Us</h2>
		<form id="contactForm">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">

			<label for="email">Email</label>
			<input type="email" id="email" name="email">

			<label for="mobile">Mobile</label>
			<input type="text" id="mobile" name="mobile" maxlength="10">
			
			<label for="message">Message</label>
			<textarea id="message" name="message" rows="4"></textarea>

			<button type="submit" name="submit_form">Submit</button>
			
		</form>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
