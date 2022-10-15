<?php



/*--- Banner background function for image, color, gradient ---*/

function corporatez_banner_background() {
	
	$subtitle = get_theme_mod('banner_sub_title', __('Grow Your Business With Our Strategy', 'corporatez-ex'));
	$fornt_img = get_theme_mod('banner_side_img','');
	$title = get_theme_mod('banner_main_title', __('insuring your future from today', 'corporatez-ex'));
	$subpera = get_theme_mod('banner_para', __('We are true to ourselves, and commit to always perform at our best.', 'corporatez-ex'));
	$button_text1 = get_theme_mod('banner_btn1_txt', __('More Features', 'corporatez-ex'));
	$button_text2 = get_theme_mod('banner_btn2_txt', __('*GET PRO*', 'corporatez-ex'));
	$button_url1 = get_theme_mod('banner_btn1_url', 'https://a2themes.com/details/corporate/corporatez-pro');
	$button_url2 = get_theme_mod('banner_btn2_url', 'https://www.popularfx.com/themes/wordpress/corporate/CorporateZ_Pro');
	$site_header_type = get_theme_mod('site_header_type', 'image');
	
	?>
	
	<div class="header-background background-wave style1">
		<div class="header-content">
			<div class="container">
				<div class="row align-center">
				<div class="<?php if(!empty($fornt_img)){ echo 'col-md-7 col-lg-8' ;} else {echo 'col-md-12 col-lg-12';} ?> ">
						<div class="banner-text-content" >
							<h5 class="bg-maintitle"><?php echo esc_html( $subtitle ); ?></h5>
							<h1 class="bg-subtitle"><?php echo esc_html( $title ); ?></h1>
							<p class="bg-subpera"><?php echo esc_html( $subpera ); ?></p>
							<?php if(!empty($button_text1)){ ?>
							<div class="banner-btn-div">
							    <a href="<?php echo esc_url( $button_url1 ); ?>" class="bg-banner-button banner-button mt-5"><?php echo esc_html( $button_text1 ); ?></a>&nbsp;&nbsp;
							<?php }?>
							<?php if(!empty($button_text2)){ ?>
							<a href="<?php echo esc_url( $button_url2 ); ?>" class="bg-banner-button2 banner-button mt-5"><?php echo esc_html( $button_text2 ); ?></a>
							</div>
							<?php }?>
						</div>
					</div>
					<?php if(!empty($fornt_img)){ ?>
					<div class="col-md-5 col-lg-3 ">
						<div class="background_image_right">
							<img class="front_img" src="<?php  echo esc_url($fornt_img); ?>" alt="Banner Image">
						</div>
					</div>
					<?php }?>
				</div>	
			</div>	
		</div>
	</div> 
	
	<?php
	
}


/*--- Banner background function for video ---*/

function corporatez_banner_video() {

	if ( !function_exists('the_custom_header_markup') ) {
		return;
	}

	$banner_type 	= get_theme_mod( 'banner_type' );

	if ( get_theme_mod('banner_type') == 'video' && is_front_page() ) {
		the_custom_header_markup();
	}
}