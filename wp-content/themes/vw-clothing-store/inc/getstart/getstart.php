<?php
//about theme info
add_action( 'admin_menu', 'vw_clothing_store_gettingstarted' );
function vw_clothing_store_gettingstarted() {
	add_theme_page( esc_html__('About VW Clothing Store ', 'vw-clothing-store'), esc_html__('About VW Clothing Store ', 'vw-clothing-store'), 'edit_theme_options', 'vw_clothing_store_guide', 'vw_clothing_store_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_clothing_store_admin_theme_style() {
	wp_enqueue_style('vw-clothing-store-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('vw-clothing-store-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_clothing_store_admin_theme_style');

//guidline for about theme
function vw_clothing_store_mostrar_guide() { 
	//custom function about theme customizer
	$vw_clothing_store_return = add_query_arg( array()) ;
	$vw_clothing_store_theme = wp_get_theme( 'vw-clothing-store' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to VW Clothing Store ', 'vw-clothing-store' ); ?> <span class="version"><?php esc_html_e( 'Version', 'vw-clothing-store' ); ?>: <?php echo esc_html($vw_clothing_store_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-clothing-store'); ?></p>
    </div>
    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<h4><?php esc_html_e('Try Premium ','vw-clothing-store'); ?></h4>
				<h4><?php esc_html_e('VW Clothing Store Theme','vw-clothing-store'); ?></h4>
				<h4 class="disc-text"><?php esc_html_e('at 20% Discount','vw-clothing-store'); ?></h4>
				<h4><?php esc_html_e('Use Coupon','vw-clothing-store'); ?> ( <span><?php esc_html_e('vwpro20','vw-clothing-store'); ?></span> ) </h4> 
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CLOTHING_STORE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-clothing-store' ); ?></a>
				</div>
			</div>
		</div>   
		<div class="logo-img">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
    </div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-clothing-store' ); ?></button>
			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-clothing-store' ); ?></button>
			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-clothing-store' ); ?></button>
			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-clothing-store' ); ?></button>
			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-clothing-store' ); ?></button>
  			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free Vs Premium', 'vw-clothing-store' ); ?></button>
  			<button class="tablinks" onclick="vw_clothing_store_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'vw-clothing-store' ); ?></button>
		</div>

		<?php 
			$vw_clothing_store_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_clothing_store_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Clothing_Store_Plugin_Activation_Settings::get_instance();
				$vw_clothing_store_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-clothing-store-recommended-plugins">
				    <div class="vw-clothing-store-action-list">
				        <?php if ($vw_clothing_store_actions): foreach ($vw_clothing_store_actions as $key => $vw_clothing_store_actionValue): ?>
				                <div class="vw-clothing-store-action" id="<?php echo esc_attr($vw_clothing_store_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_clothing_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_clothing_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_clothing_store_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-clothing-store'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_clothing_store_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-clothing-store' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Introducing VW Clothing Store, a versatile and stylish WordPress theme designed for fashion boutiques, clothing retailers, online apparel stores, and fashion enthusiasts. With its sleek design and robust features, VW Clothing Store provides a dynamic platform to showcase your latest fashion collections and attract fashion-forward shoppers.VW Clothing Store is a chic and adaptable template tailored for fashion-forward online retailers. Boasting a contemporary and uncluttered design, this theme provides an attractive backdrop for showcasing a diverse array of clothing and accessories. Its user-friendly interface caters to both novice and experienced users, ensuring a seamless and enjoyable experience for visitors. This theme can be used for various nichessuch as Women’s fashion boutique, Men’s clothing store, Children’s apparel shop,Plus-size clothing store, Activewear shop, Luxury fashion boutique, Streetwear and urban fashion store, Wedding dress and bridal shop, Fashion accessories store (jewelry, handbags, scarves, etc.), Shoe store, Sunglasses and eyewear shop, Makeup and beauty tools store, Women’s skincare and cosmetics shop. Designed with responsiveness in mind, the VW Clothing Store theme guarantees a polished look across various devices, from desktops to tablets and smartphones. This versatility enhances the accessibility of the online store, capturing a wider audience. One of its standout features is the ease of customization, allowing store owners to effortlessly personalize their websites to reflect their brand aesthetic. From color palettes to font choices, users can effortlessly tailor the appearance of their online store to create a distinctive and memorable shopping atmosphere. The theme’s intuitive product showcase is designed for optimal visual impact, enabling retailers to present their merchandise in an organized and eye-catching manner. This feature-rich theme comes equipped with everything you need to create a visually stunning and user-friendly online store. From customizable product pages to integrated shopping cart functionality, VW Clothing Store empowers you to showcase your products in style and streamline the shopping experience for your customers. Seamless integration with popular e-commerce plugins ensures secure transactions and a smooth shopping experience for customers. Emphasizing user-friendly navigation, the VW Clothing Store theme ensures that visitors can easily explore the product catalog. The VW Clothing Store theme is a reliable and visually appealing solution for those aiming to establish a successful online clothing store with a focus on aesthetics and functionality. VW Clothing Store is your go-to solution for building a standout online presence in the competitive world of fashion.','vw-clothing-store'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-clothing-store' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-clothing-store' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CLOTHING_STORE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-clothing-store' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-clothing-store'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-clothing-store'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-clothing-store'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-clothing-store'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-clothing-store'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CLOTHING_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-clothing-store'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-clothing-store'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-clothing-store'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CLOTHING_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-clothing-store'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-clothing-store' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-clothing-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-clothing-store'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_banner') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','vw-clothing-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_products_section') ); ?>" target="_blank"><?php esc_html_e('Products Section','vw-clothing-store'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-clothing-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-clothing-store'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-clothing-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-clothing-store'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-clothing-store'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-clothing-store'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-clothing-store'); ?></span><?php esc_html_e(' Go to ','vw-clothing-store'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-clothing-store'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-clothing-store'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-clothing-store'); ?></span><?php esc_html_e(' Go to ','vw-clothing-store'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-clothing-store'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-clothing-store'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','vw-clothing-store'); ?> <a class="doc-links" href="<?php echo esc_url( VW_CLOTHING_STORE_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','vw-clothing-store'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$plugin_ins = vw_clothing_store_Plugin_Activation_Settings::get_instance();
				$vw_clothing_store_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-clothing-store-recommended-plugins">
				    <div class="vw-clothing-store-action-list">
				        <?php if ($vw_clothing_store_actions): foreach ($vw_clothing_store_actions as $key => $vw_clothing_store_actionValue): ?>
				                <div class="vw-clothing-store-action" id="<?php echo esc_attr($vw_clothing_store_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_clothing_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_clothing_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_clothing_store_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-clothing-store'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_clothing_store_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-clothing-store' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-clothing-store'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon.','vw-clothing-store'); ?></span></b></p>
	              	<div class="vw-clothing-store-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-clothing-store'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    	<p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Sections >> Publish.','vw-clothing-store'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-clothing-store' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-clothing-store'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-clothing-store'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-clothing-store'); ?></a>
							</div>

							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-clothing-store'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-clothing-store'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-clothing-store'); ?></a>
							</div>
						</div>
					</div>
				</div>
	     	</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Clothing_Store_Plugin_Activation_Settings::get_instance();
			$vw_clothing_store_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-clothing-store-recommended-plugins">
				    <div class="vw-clothing-store-action-list">
				        <?php if ($vw_clothing_store_actions): foreach ($vw_clothing_store_actions as $key => $vw_clothing_store_actionValue): ?>
				                <div class="vw-clothing-store-action" id="<?php echo esc_attr($vw_clothing_store_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_clothing_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_clothing_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_clothing_store_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-clothing-store' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-clothing-store-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-clothing-store'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-clothing-store' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-clothing-store'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-clothing-store'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-clothing-store'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-clothing-store'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_clothing_store_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-clothing-store'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-clothing-store'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
				<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Clothing_Store_Plugin_Activation_Woo_Products::get_instance();
				$vw_clothing_store_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-clothing-store-recommended-plugins">
				    <div class="vw-clothing-store-action-list">
				        <?php if ($vw_clothing_store_actions): foreach ($vw_clothing_store_actions as $key => $vw_clothing_store_actionValue): ?>
				                <div class="vw-clothing-store-action" id="<?php echo esc_attr($vw_clothing_store_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_clothing_store_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_clothing_store_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_clothing_store_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-clothing-store' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-clothing-store-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-clothing-store'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-clothing-store'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-clothing-store'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-clothing-store'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-clothing-store'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-clothing-store'); ?></b></p>
	              	<div class="vw-clothing-store-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-clothing-store'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-clothing-store'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-clothing-store' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('VW Clothing Store is a chic and adaptable template tailored for fashion-forward online retailers. Boasting a contemporary and uncluttered design, this theme provides an attractive backdrop for showcasing a diverse array of clothing and accessories. Its user-friendly interface caters to both novice and experienced users, ensuring a seamless and enjoyable experience for visitors. Designed with responsiveness in mind, the VW Clothing Store theme guarantees a polished look across various devices, from desktops to tablets and smartphones. This versatility enhances the accessibility of the online store, capturing a wider audience. One of its standout features is the ease of customization, allowing store owners to effortlessly personalize their websites to reflect their brand aesthetic. From color palettes to font choices, users can effortlessly tailor the appearance of their online store to create a distinctive and memorable shopping atmosphere. The themes intuitive product showcase is designed for optimal visual impact, enabling retailers to present their merchandise in an organized and eye-catching manner. Seamless integration with popular e-commerce plugins ensures secure transactions and a smooth shopping experience for customers. Emphasizing user-friendly navigation, the VW Clothing Store theme ensures that visitors can easily explore the product catalog. The VW Clothing Store theme is a reliable and visually appealing solution for those aiming to establish a successful online clothing store with a focus on aesthetics and functionality.','vw-clothing-store'); ?></p>
		    	
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_CLOTHING_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-clothing-store'); ?></a>
					<a href="<?php echo esc_url( VW_CLOTHING_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-clothing-store'); ?></a>
					<a href="<?php echo esc_url( VW_CLOTHING_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-clothing-store'); ?></a>
					<a href="<?php echo esc_url( VW_CLOTHING_STORE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'vw-clothing-store'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-clothing-store' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-clothing-store'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-clothing-store'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization and Gutunberg', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Banner', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-clothing-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-clothing-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-clothing-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections (Exclusive Header and Footer)', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-clothing-store'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'vw-clothing-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-clothing-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-clothing-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-clothing-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-clothing-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-clothing-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_CLOTHING_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-clothing-store'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-clothing-store' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-clothing-store'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-clothing-store' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'vw-clothing-store'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-clothing-store'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-clothing-store'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-clothing-store'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-clothing-store'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_CLOTHING_STORE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-clothing-store'); ?></a>
					<a href="<?php echo esc_url( VW_CLOTHING_STORE_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-clothing-store'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>
	</div>
</div>

<?php } ?>