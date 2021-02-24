<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<?php
  wp_body_open();
  echo '<header class="page-header">';
  echo '<div class="menu-icon">'; get_template_part( 'template/menu', 'icon' ); echo '</div>';
  echo '<div class="page-name">' . get_bloginfo( 'name' ) . '</div>';
  echo '<div class="page-logo">' . '<a href="' . home_url() . '"><img src="' . get_template_directory_uri() . '/img/logo.svg" alt="Logo" /></a></div>';
	echo '</header>';