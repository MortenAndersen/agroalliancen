<div class="menu-wrap">
	<div class="all-menu">
		<div class="menu-1">
			<?php // echo '<img src="' . get_template_directory_uri() . '/img/menu1.jpg" alt="" />'; ?>
			<div class="menu-content">
				<p class="menu-title">Agro-Alliancen</p>
				<?php
					if ( has_nav_menu( 'main-menu-1' ) ) :
						$main_nav_1 = array(
							'theme_location' => 'main-menu-1',
							'container' =>  false,
						);
						echo '<nav>';
							wp_nav_menu( $main_nav_1 );
						echo '</nav>';
					endif;
				 	dynamic_sidebar( 'sidebar-menu-1' );
				?>
			</div>
		</div>
		<div class="menu-2">
			<?php // echo '<img src="' . get_template_directory_uri() . '/img/menu2.jpg" alt="" />'; ?>
			<div class="menu-content">
				<p class="menu-title">Udforsk</p>
				<?php
					if ( has_nav_menu( 'main-menu-2' ) ) :
						$main_nav_2 = array(
							'theme_location' => 'main-menu-2',
							'container' =>  false,
						);
						echo '<nav>';
							wp_nav_menu( $main_nav_2 );
						echo '</nav>';
					endif;
					dynamic_sidebar( 'sidebar-menu-2' );
				?>
			</div>
		</div>
		<div class="menu-3">
			<?php // echo '<img src="' . get_template_directory_uri() . '/img/menu3.jpg" alt="" />'; ?>
			<div class="menu-content">
				<p class="menu-title">Kontakt</p>
				<?php
					if ( has_nav_menu( 'main-menu-3' ) ) :
						$main_nav_3 = array(
							'theme_location' => 'main-menu-3',
							'container' =>  false,
						);
						echo '<nav>';
							wp_nav_menu( $main_nav_3 );
						echo '</nav>';
					endif;
					dynamic_sidebar( 'sidebar-menu-3' );
				?>
			</div>
		</div>
	</div>
</div>