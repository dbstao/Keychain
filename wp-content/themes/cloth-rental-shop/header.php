<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cloth-rental-shop' ); ?></a>

<?php if ( get_theme_mod('cloth_rental_shop_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'cloth-rental-shop' ); ?></h1>
    </div>
<?php endif; ?>

<div class="<?php if( get_theme_mod( 'cloth_rental_shop_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<header id="site-navigation" class="header text-center text-md-start">
		<div class="container-fluid px-6">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
		    		<div class="logo text-md-center text-lg-start">
			    		<div class="logo-image me-3">
			    			<?php the_custom_logo(); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('cloth_rental_shop_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_attr(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('cloth_rental_shop_display_header_text', false) == true ) :
					      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
						</div>
					</div>
			   	</div>
				<div class="col-lg-5 col-md-7 col-sm-7 align-self-center">
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'cloth-rental-shop' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
					<?php if ( get_theme_mod('cloth_rental_shop_search_box_enable', true) == true ) : ?>
						<div class="woo-search-info">
			          		<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
				            	<label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'cloth-rental-shop'); ?></label>
					            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php esc_attr_e('Search Here...','cloth-rental-shop'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
					            <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
					            <input type="hidden" name="post_type" value="product"/>
				          	</form>
				        </div>
			        <?php endif; ?>
	        	</div>
				<div class="col-lg-2 col-md-2 col-sm-2 align-self-center search-cart">
	                <?php if(class_exists('woocommerce')){ ?>
	                	<div class="myaccount-box">
				          	<?php if ( is_user_logged_in() ) { ?>
				            	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-in-alt"></i></a>
				          	<?php }
				          	else { ?>
				            	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','cloth-rental-shop'); ?>"><i class="fas fa-user"></i></a>
				          	<?php } ?>
				        </div>
			        <?php }?>
			        <?php if(class_exists('woocommerce')){ ?>
			        	<div class="cart-customlocation">
							<a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','cloth-rental-shop' ); ?>"><i class="fas fa-shopping-cart"></i></a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</header>
</div>