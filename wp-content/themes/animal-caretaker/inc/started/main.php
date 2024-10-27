<?php

add_action( 'admin_menu', 'animal_caretaker_getting_started' );
function animal_caretaker_getting_started() {
	add_theme_page( esc_html__('Theme Info', 'animal-caretaker'), esc_html__('Theme Info', 'animal-caretaker'), 'edit_theme_options', 'animal-caretaker-guide-page', 'animal_caretaker_test_guide', 1);
}

if ( ! defined( 'ANIMAL_CARETAKER_DOCS_FREE' ) ) {
define('ANIMAL_CARETAKER_DOCS_FREE',__('https://mishkatwp.com/instruction/animal-caretaker-free-docs/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_DOCS_PRO' ) ) {
define('ANIMAL_CARETAKER_DOCS_PRO',__('https://mishkatwp.com/instruction/animal-caretaker-pro-docs/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_BUY_NOW' ) ) {
define('ANIMAL_CARETAKER_BUY_NOW',__('https://www.mishkatwp.com/themes/animal-caretaker-wordpress-theme/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_SUPPORT_FREE' ) ) {
define('ANIMAL_CARETAKER_SUPPORT_FREE',__('https://wordpress.org/support/theme/animal-caretaker','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_REVIEW_FREE' ) ) {
define('ANIMAL_CARETAKER_REVIEW_FREE',__('https://wordpress.org/support/theme/animal-caretaker/reviews/#new-post','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_DEMO_PRO' ) ) {
define('ANIMAL_CARETAKER_DEMO_PRO',__('https://mishkatwp.com/pro/animal-caretaker/','animal-caretaker'));
}
if ( ! defined( 'ANIMAL_CARETAKER_BUNDLE' ) ) {
define('ANIMAL_CARETAKER_BUNDLE',__('https://www.mishkatwp.com/themes/wordpress-theme-bundle/','animal-caretaker'));
}

function animal_caretaker_test_guide() { ?>
	<?php $animal_caretaker_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="righty">
			<div class="postbox donate">
				<h4><?php esc_html_e( 'Discount Upto 25%', 'animal-caretaker' ); ?> <span><?php esc_html_e( '"Special25"', 'animal-caretaker' ); ?></span></h4>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'animal-caretaker' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Click to upgrade to see the enhanced pro features available in the premium version.','animal-caretaker'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'animal-caretaker' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ANIMAL_CARETAKER_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'animal-caretaker' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ANIMAL_CARETAKER_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'animal-caretaker' ) ?></a>
					</div>
				</div>
				<div class="d-table">
				    <ul class="d-column">
				      <li class="feature"><?php esc_html_e('Features','animal-caretaker'); ?></li>
				      <li class="free"><?php esc_html_e('Pro','animal-caretaker'); ?></li>
				      <li class="plus"><?php esc_html_e('Free','animal-caretaker'); ?></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('24hrs Priority Support','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('LearnPress Campatiblity','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Kirki Framework','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Posttype','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('One Click Demo Import','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Section Reordering','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Enable / Disable Option','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Multiple Sections','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Color Pallete','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Widgets','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Page Templates','animal-caretaker'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
		  		</div>
			</div>
		</div>
		<div id="lefty">
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','animal-caretaker'); ?><?php echo esc_html( $animal_caretaker_theme ); ?>  <span><?php esc_html_e('Version: ', 'animal-caretaker'); ?><?php echo esc_html($animal_caretaker_theme['Version']);?></span></h3>
				<h4><?php esc_html_e('Begin with our theme features','animal-caretaker'); ?></span></h4>
				<div class="customizer-inside">
					<div class="animal-caretaker-theme-setting-item">
                        <div class="animal-caretaker-theme-setting-item-header">
                            <?php esc_html_e( 'Add Menus', 'animal-caretaker' ); ?>                            
                       	</div>
                        <div class="animal-caretaker-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>"><?php esc_html_e('Go to Menu', 'animal-caretaker'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to menu >> Select menu which you had created >> Then Publish ', 'animal-caretaker' ); ?></p>
                	</div>
                	<div class="animal-caretaker-theme-setting-item">
                        <div class="animal-caretaker-theme-setting-item-header">
                            <?php esc_html_e( 'Add Logo', 'animal-caretaker' ); ?>                            
                       	</div>
                        <div class="animal-caretaker-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>"><?php esc_html_e('Go to Site Identity', 'animal-caretaker'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Site Identity >> Select Logo Add Title or Tagline >> Then Publish ', 'animal-caretaker' ); ?></p>
                	</div>
                	<div class="animal-caretaker-theme-setting-item">
                        <div class="animal-caretaker-theme-setting-item-header">
                            <?php esc_html_e( 'Home Page Section', 'animal-caretaker' ); ?>                            
                       	</div>
                        <div class="animal-caretaker-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=animal_caretaker_home_page_section') ); ?>"><?php esc_html_e('Go to Home Page Section', 'animal-caretaker'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Home Page Sections >> Then go to different section which ever you want >> Then Publish ', 'animal-caretaker' ); ?></p>
                	</div>
                	<div class="animal-caretaker-theme-setting-item">
                        <div class="animal-caretaker-theme-setting-item-header">
                            <?php esc_html_e( 'Post Options', 'animal-caretaker' ); ?>                            
                       	</div>
                        <div class="animal-caretaker-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=animal_caretaker_post_image_on_off') ); ?>"><?php esc_html_e('Go to Post Options', 'animal-caretaker'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Post Options >> Then go to different settings which ever you want >> Then Publish ', 'animal-caretaker' ); ?></p>
                	</div>
                	<div class="animal-caretaker-theme-setting-item">
                        <div class="animal-caretaker-theme-setting-item-header">
                            <?php esc_html_e( 'Post Layout Options', 'animal-caretaker' ); ?>                            
                       	</div>
                        <div class="animal-caretaker-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=animal_caretaker_post_layout') ); ?>"><?php esc_html_e('Go to Post Layout Options', 'animal-caretaker'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Post Layout Options >> Then go to different settings which ever you want >> Then Publish ', 'animal-caretaker' ); ?></p>
                	</div>
                	<div class="animal-caretaker-theme-setting-item">
                        <div class="animal-caretaker-theme-setting-item-header">
                            <?php esc_html_e( 'General Options Options', 'animal-caretaker' ); ?>                            
                       	</div>
                        <div class="animal-caretaker-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=animal_caretaker_preloader_setting') ); ?>"><?php esc_html_e('Go to General Options', 'animal-caretaker'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Post General Options >> Then go to different settings which ever you want >> Then Publish ', 'animal-caretaker' ); ?></p>
                	</div>
                	
                	<a target="_blank" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="animal-caretaker-theme-setting-item animal-caretaker-theme-setting-item-unavailable">
					    <div class="animal-caretaker-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Customize All Fonts", "animal-caretaker"); ?></span> <span><?php esc_html_e("Premium", "animal-caretaker"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="animal-caretaker-theme-setting-item animal-caretaker-theme-setting-item-unavailable">
					    <div class="animal-caretaker-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Customize All Color", "animal-caretaker"); ?></span> <span><?php esc_html_e("Premium", "animal-caretaker"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="animal-caretaker-theme-setting-item animal-caretaker-theme-setting-item-unavailable">
					    <div class="animal-caretaker-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Section Reorder", "animal-caretaker"); ?></span> <span><?php esc_html_e("Premium", "animal-caretaker"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="animal-caretaker-theme-setting-item animal-caretaker-theme-setting-item-unavailable">
					    <div class="animal-caretaker-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Typography Options", "animal-caretaker"); ?></span> <span><?php esc_html_e("Premium", "animal-caretaker"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="animal-caretaker-theme-setting-item animal-caretaker-theme-setting-item-unavailable">
					    <div class="animal-caretaker-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("One Click Demo Import", "animal-caretaker"); ?></span> <span><?php esc_html_e("Premium", "animal-caretaker"); ?></span>
					    </div>
					</a>
					<a target="_blank" href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="animal-caretaker-theme-setting-item animal-caretaker-theme-setting-item-unavailable">
					    <div class="animal-caretaker-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Background  Settings", "animal-caretaker"); ?></span> <span><?php esc_html_e("Premium", "animal-caretaker"); ?></span>
					    </div>
					</a>
					
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="animal-caretaker-theme-setting-sidebar-item">
		        <div class="animal-caretaker-theme-setting-sidebar-header"><?php esc_html_e( 'Theme Bundle', 'animal-caretaker' ) ?></div>
		        <div class="animal-caretaker-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Get our all themes in single pack.', 'animal-caretaker' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ANIMAL_CARETAKER_BUNDLE ); ?>" target="_blank" class="blue-button-2"><?php esc_html_e( 'Theme Bundle', 'animal-caretaker' ) ?></a>
		            </div>
		        </div>
		    </div>
			<div class="animal-caretaker-theme-setting-sidebar-item">
		        <div class="animal-caretaker-theme-setting-sidebar-header"><?php esc_html_e( 'Free Documentation', 'animal-caretaker' ) ?></div>
		        <div class="animal-caretaker-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Our guide is available if you require any help configuring and setting up the theme.', 'animal-caretaker' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ANIMAL_CARETAKER_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Free Documentation', 'animal-caretaker' ) ?></a>
		            </div>
		        </div>
		    </div>
		    <div class="animal-caretaker-theme-setting-sidebar-item">
		        <div class="animal-caretaker-theme-setting-sidebar-header"><?php esc_html_e( 'Support', 'animal-caretaker' ) ?></div>
		        <div class="animal-caretaker-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Visit our website to contact us if you face any issues with our lite theme!', 'animal-caretaker' ) ?></p>
		            <div id="admin_links">
		            	<a class="blue-button-2" href="<?php echo esc_url( ANIMAL_CARETAKER_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'animal-caretaker' ) ?></a>
		            </div>
		        </div>
		    </div>
		    <div class="animal-caretaker-theme-setting-sidebar-item">
		        <div class="animal-caretaker-theme-setting-sidebar-header"><?php esc_html_e( 'Review', 'animal-caretaker' ) ?></div>
		        <div class="animal-caretaker-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Are you having fun with Animal Caretaker? Review us on WordPress.org to show your support!', 'animal-caretaker' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ANIMAL_CARETAKER_REVIEW_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Review', 'animal-caretaker' ) ?></a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

<?php } ?>
