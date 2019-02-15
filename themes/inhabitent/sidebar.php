<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<section id="sidebarcontainer">
					<div class="sbcontact_info">
						<p class="sbtext-input">Contact Info</p>
						<p class="sbemail-input">Email:<p>
						<p class="sbtext-input">778-456-7891</p>
				
					</div><!-- contact_info -->
					<div class="sbbushours">
						<p class="sbtext-input">Business hours</p>
						<p class="sbdate-input">Monday-Friday: 9am to 5pm</p>
						<p class="sbdate-input">Saturday: 10am to 2pm</p>
						<p class="sbdate-input">Sunday: Closed</p>
					</div>
					<div class="sidebararchives">
					</div>
</div><!-- #secondary -->
