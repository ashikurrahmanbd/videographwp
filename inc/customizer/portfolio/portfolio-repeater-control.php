<?php
// Load Custom Control class if not already loaded
if (class_exists('WP_Customize_Control')) {
    class Portfolio_Repeater_Control extends WP_Customize_Control {
        public $type = 'portfolio_repeater';

        public function enqueue() {

            wp_enqueue_script('portfolio-repeater-script', get_template_directory_uri() . '/inc/customizer/portfolio/portfolio-control.js', array('jquery', 'customize-controls'), '1.0', true);

            wp_enqueue_style('portfolio-repeater-style', get_template_directory_uri() . '/inc/customizer/portfolio/portfolio-control.css', array(), '1.0');
            
           
        }

        public function render_content() {
            ?>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <div class="portfolio-repeater">
                <div class="portfolio-items"></div>
                <button type="button" class="button add-portfolio-item"><?php esc_html_e('Add Portfolio Item'); ?></button>
                <textarea class="portfolio-repeater-data hidden" <?php $this->link(); ?>>
                    <?php echo esc_textarea($this->value()); ?>
                </textarea>
            </div>
            <script type="text/html" class="portfolio-template">

                <div class="portfolio-item">
                    <hr>
                    <label>
                        <span><?php esc_html_e('Portfolio Thumbnail URL'); ?></span>
                        <input type="text" class="portfolio-thumbnail" placeholder="<?php esc_attr_e('Thumbnail URL'); ?>">
                    </label>
                    <label>
                        <span><?php esc_html_e('Portfolio Video Link'); ?></span>
                        <input type="text" class="portfolio-video" placeholder="<?php esc_attr_e('Video Link'); ?>">
                    </label>
                    <label>
                        <span><?php esc_html_e('Portfolio Type'); ?></span>
                        <select class="portfolio-type">
                            <option value=""><?php esc_html_e('Select Portfolio Type'); ?></option> <!-- Default empty option -->
                            <option value="wide"><?php esc_html_e('Wide Item'); ?></option>
                            <option value="small"><?php esc_html_e('Small Item'); ?></option>
                        </select>
                    </label>
                    <div class="portfolio-wide-fields hidden">
                        <label>
                            <span><?php esc_html_e('Portfolio Heading'); ?></span>
                            <input type="text" class="portfolio-heading" placeholder="<?php esc_attr_e('Heading'); ?>">
                        </label>
                        <label>
                            <span><?php esc_html_e('Portfolio Categories'); ?></span>
                            <input type="text" class="portfolio-categories" placeholder="<?php esc_attr_e('Category, Subcategory'); ?>">
                        </label>
                    </div>
                    <button type="button" class="button remove-portfolio-item"><?php esc_html_e('Remove Item'); ?></button>
                </div>
                

            </script>
           
            <?php
        }
    }
}