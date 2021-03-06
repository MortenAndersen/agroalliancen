
<?php
	echo '<footer class="page-footer">';

		echo '<div class="footer-social">';

					echo '<a href="https://www.facebook.com/RavnholtogEgeskovGodser" target="_blank"><img src="' . get_template_directory_uri() . '/img/facebook.svg" alt="Facebook" /></a>';

					echo '<a href="https://www.linkedin.com/company/agro-alliancen/" target="_blank"><img src="' . get_template_directory_uri() . '/img/linkedin.svg" alt="Linkedin" /></a>';

					echo '<a href="mailto:bogholder@ravnholt-gods.dk" target="_blank"><img src="' . get_template_directory_uri() . '/img/mail.svg" alt="Skriv til os" /></a>';

		echo '</div>';

		echo '<div class="footer-logoer">';
			echo '<a href="https://www.egeskov.dk/" target="_blank" class="egeskov-logo"><img src="' . get_template_directory_uri() . '/img/egeskov-vaabenskjold.svg" alt="Egeskov Slot" /></a>';
			echo '<a href="#"><img src="' . get_template_directory_uri() . '/img/ravnsholt.svg" alt="Ravnsholt" /></a>';
		echo '</div>';


					if ( has_nav_menu( 'footer-menu-1' ) ) :
						$footer_nav_1 = array(
							'theme_location' => 'footer-menu-1',
							'container' =>  false,
						);
						$menu = wp_get_nav_menu_object("footer-menu-1" );
						echo '<div class="footer-menu-1">';
						echo '<p class="menu-title">Agro-Alliancen</p>';
						echo '<nav>';
							wp_nav_menu( $footer_nav_1 );
						echo '</nav>';
						echo '</div>';
					endif;


			if ( has_nav_menu( 'footer-menu-2' ) ) :
						$footer_nav_2 = array(
							'theme_location' => 'footer-menu-2',
							'container' =>  false,
						);
						echo '<div class="footer-menu-2">';
						echo '<p class="menu-title">Udforsk</p>';
						echo '<nav>';
							wp_nav_menu( $footer_nav_2 );
						echo '</nav>';
						echo '</div>';
					endif;


			if ( has_nav_menu( 'footer-menu-3' ) ) :
						$footer_nav_3 = array(
							'theme_location' => 'footer-menu-3',
							'container' =>  false,
						);
						echo '<div class="footer-menu-3">';
						echo '<p class="menu-title">Kontakt</p>';
						echo '<nav>';
							wp_nav_menu( $footer_nav_3 );
						echo '</nav>';
						echo '</div>';
					endif;


	echo '</footer>';

	get_template_part( 'template/main', 'menu' );
	wp_footer();
?>
</body>
</html>