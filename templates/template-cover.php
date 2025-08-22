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

<style>

    .container {
      max-width: 500px;
      margin: auto;
      background: #fff;
      padding: 30px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 15px;
      padding: 10px;
      width: 100%;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
<main id="site-content">

	<div class="container">
		<h2>Contact Us</h2>
		<form id="contactForm" method="POST" action="#" onsubmit="return validateContactForm()" >
			<label for="name">Name</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>

			<label for="mobile">Mobile</label>
			<input type="text" id="mobile" name="mobile" maxlength="10" required>
			
			<label for="message">Message</label>
			<textarea id="message" name="message" rows="4"></textarea>

			<button type="submit" name="submit_form" value="submit">Submit</button>
			
		</form>
	</div>

	<script>
		function validateContactForm() {
			
			const email = document.getElementById('email').value.trim();
			console.log(email);
			// Basic email pattern check
			const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
			if (!email.match(emailPattern)) {
				errorMessage.textContent = "Please enter a valid email address.";
				return false;
			}

			// alert("Message sent successfully!");
			// return true;
		}
		</script>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
