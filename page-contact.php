<?php
/* Template Name: Contact Page */

get_header();

?>

<form id="contactForm" method="post">
  <p>
    <label for="name">Name*</label><br>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <label for="email">Email*</label><br>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="phone">Phone Number</label><br>
    <input type="text" name="phone" id="phone">
  </p>
  <p>
    <label for="message">Message*</label><br>
    <textarea name="message" id="message" rows="5"></textarea>
  </p>

  <p><input type="submit" value="Send Message" name="submit_contact_form"></p>
</form>



<?php get_footer(); ?>
