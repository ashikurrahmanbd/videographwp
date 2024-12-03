<?php

if ( class_exists( 'WP_Customize_Control' ) ) {
    class Hero_Repeater_Control extends WP_Customize_Control {
        public $type = 'hero_repeater';

        public function enqueue() {

            wp_enqueue_script(
                'hero-repeater-control',
                get_template_directory_uri() . '/inc/customizer/hero/js/custom-repeater-control.js',
                array( 'jquery', 'customize-controls' ),
                '1.0',
                true
            );

            wp_enqueue_style(
                'hero-repeater-control-css',
                get_template_directory_uri() . '/inc/customizer/hero/css/custom-repeater-control.css',
                array(),
                '1.0'
            );
        }

        public function render_content() { ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            </label>
            <ul class="hero-repeater-items">
                <?php
                $values = $this->value();
                $values = is_string( $values ) ? json_decode( $values, true ) : $values;

                if ( ! empty( $values ) ) :
                    foreach ( $values as $item ) :
                        ?>
                        <li class="hero-repeater-item">
                            <input type="text" class="hero-image" value="<?php echo esc_attr( $item['hero_image'] ?? '' ); ?>" placeholder="Hero Image URL">
                            <input type="text" class="hero-heading" value="<?php echo esc_attr( $item['hero_heading'] ?? '' ); ?>" placeholder="Hero Heading">
                            <input type="text" class="hero-subheading" value="<?php echo esc_attr( $item['hero_subheading'] ?? '' ); ?>" placeholder="Hero Subheading">
                            <input type="text" class="hero-cta-text" value="<?php echo esc_attr( $item['hero_cta_text'] ?? '' ); ?>" placeholder="CTA Text">
                            <input type="url" class="hero-cta-link" value="<?php echo esc_attr( $item['hero_cta_link'] ?? '' ); ?>" placeholder="CTA Link">
                            <button type="button" class="button remove-hero-repeater-item">Remove</button>
                        </li>
                        <?php
                    endforeach;
                endif;
                ?>
            </ul>
            <button type="button" class="button add-hero-repeater-item">Add Hero Item</button>
            <input type="hidden" class="hero-repeater-collection" <?php $this->link(); ?> value="<?php echo esc_attr( json_encode( $values ) ); ?>">
        <?php }
    }
}
