<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

    <!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="page">
	
	<?php // ORTOC Nouvelle Navbar Responsive ?>
	<header class="ortoc-navbar">
		<div class="ortoc-navbar-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php if (has_custom_logo()) {
					the_custom_logo();
				} else {
					bloginfo('name');
				} ?>
			</a>
		</div>
		<nav class="ortoc-navbar-menu">
			<a class="ortoc-navbar-open-btn" href="#" aria-label="Open menu">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="5" y="7" width="20" height="3" fill="white"/>
                    <rect x="5" y="14" width="20" height="3" fill="white"/>
                    <rect x="5" y="21" width="20" height="3" fill="white"/>
                </svg>
            </a>
			<div class="ortoc-navbar-offcanvas">
				<a class="ortoc-navbar-close-btn" href="#" aria-label="Close menu">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="7.07107" y="5" width="22" height="3" transform="rotate(45 7.07107 5)" fill="white"/>
                    <rect x="5" y="22.5711" width="22" height="3" transform="rotate(-45 5 22.5711)" fill="white"/>
                </svg>
            </a>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'menu_class'     => 'ortoc-navbar-list',
					'container'      => false,
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				));
				?>
			</div>
		</nav>
	</header>
	<?php // /ORTOC Nouvelle Navbar Responsive ?>

	<div id="site_content" class="site_content">
		<div id="primary" class="content-area">
			<main id="main" class="site_main">

<script>
// Wait for the DOM to be fully loaded before running the script
document.addEventListener('DOMContentLoaded', function() {
  // Get references to the open button, close button, and the off-canvas menu
  const openBtn = document.querySelector('.ortoc-navbar-open-btn');
  const closeBtn = document.querySelector('.ortoc-navbar-close-btn');
  const offcanvasMenu = document.querySelector('.ortoc-navbar-offcanvas');

  // Check if all necessary elements are present on the page
  if (openBtn && closeBtn && offcanvasMenu) {
    // Event listener for the open button
    openBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent the default anchor tag behavior
      offcanvasMenu.classList.add('active'); // Add 'active' class to show the menu
    });

    // Event listener for the close button
    closeBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent the default anchor tag behavior
      offcanvasMenu.classList.remove('active'); // Remove 'active' class to hide the menu
    });
  }
});
</script>
<?php // The HTML comment "<!-- /ORTOC Nouvelle Navbar Responsive -->" was here, replaced by PHP comments or removed if redundant ?>