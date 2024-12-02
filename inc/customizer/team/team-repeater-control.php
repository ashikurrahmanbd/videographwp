<?php
if (!class_exists('WP_Customize_Control')) {
    return;
}

class Team_Repeater_Custom_Control extends WP_Customize_Control {
    public $type = 'team_repeater';

    public function enqueue() {
        wp_enqueue_script('team-repeater-script', get_template_directory_uri() . '/js/team-repeater.js', array('jquery', 'customize-controls'), '1.0', true);
        wp_enqueue_style('team-repeater-style', get_template_directory_uri() . '/js/team-repeater.css', array(), '1.0');
    }

    public function render_content() {
        // Get the saved value
        $saved_data = json_decode(get_theme_mod($this->id), true);

        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
            <ul class="team-repeater-list">
                <?php if (!empty($saved_data)) : ?>
                    <?php foreach ($saved_data as $index => $item) : ?>
                        <li class="team-repeater-item">
                            <h3><?php echo esc_html(sprintf(__('Team #%d', 'mytheme'), $index + 1)); ?></h3>
                            <input type="text" class="team-name" value="<?php echo esc_attr($item['name'] ?? ''); ?>" placeholder="<?php _e('Name', 'mytheme'); ?>" />
                            <input type="text" class="team-designation" value="<?php echo esc_attr($item['designation'] ?? ''); ?>" placeholder="<?php _e('Designation', 'mytheme'); ?>" />
                            <input type="text" class="team-image" value="<?php echo esc_attr($item['image'] ?? ''); ?>" placeholder="<?php _e('Image URL', 'mytheme'); ?>" />
                            <input type="text" class="team-facebook" value="<?php echo esc_attr($item['facebook'] ?? ''); ?>" placeholder="<?php _e('Facebook URL', 'mytheme'); ?>" />
                            <input type="text" class="team-twitter" value="<?php echo esc_attr($item['twitter'] ?? ''); ?>" placeholder="<?php _e('Twitter URL', 'mytheme'); ?>" />
                            <input type="text" class="team-instagram" value="<?php echo esc_attr($item['instagram'] ?? ''); ?>" placeholder="<?php _e('Instagram URL', 'mytheme'); ?>" />
                            <input type="text" class="team-dribbble" value="<?php echo esc_attr($item['dribbble'] ?? ''); ?>" placeholder="<?php _e('Dribbble URL', 'mytheme'); ?>" />
                            <button type="button" class="button remove-team-member"><?php _e('Remove', 'mytheme'); ?></button>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <button type="button" class="button add-team-member"><?php _e('Add Team Member', 'mytheme'); ?></button>
        </label>
        <?php
    }
}
