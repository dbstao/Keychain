<?php if ( true == get_theme_mod( 'animal_caretaker_slide_on_off', 'off' ) ) : ?>

<?php $slide_count = get_theme_mod('animal_caretaker_slide_count'); ?>

<section id="home_slider">
	<div class="owl-carousel">
		<?php for ($i=1; $i <= $slide_count; $i++) {
			$animal_caretaker_slider_image = get_theme_mod('animal_caretaker_slider_image'.$i);
			$animal_caretaker_slider_heading = get_theme_mod('animal_caretaker_slider_heading'.$i);
			$animal_caretaker_slider_button_link = get_theme_mod('animal_caretaker_slider_button_link'.$i); 
			$animal_caretaker_slider_button_text = get_theme_mod('animal_caretaker_slider_button_text'.$i); ?>

			<div class="slider_main_box">
				<?php if ( ! empty( $animal_caretaker_slider_image ) ) : ?>
					<img src="<?php echo esc_url( $animal_caretaker_slider_image ); ?>">
					<div class="slider_content_box">
						<?php if ( ! empty( $animal_caretaker_slider_heading ) ) : ?>
							<h3><?php echo esc_html( $animal_caretaker_slider_heading ); ?></h3>
						<?php endif; ?>
						<div class="slider_button my-4">
							<?php if ( ! empty( $animal_caretaker_slider_button_link ) || ! empty( $animal_caretaker_slider_button_text ) ): ?>
								<a href="<?php echo esc_url( $animal_caretaker_slider_button_link ); ?>"><?php echo esc_html( $animal_caretaker_slider_button_text ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</div>
</section>

<?php endif; ?>