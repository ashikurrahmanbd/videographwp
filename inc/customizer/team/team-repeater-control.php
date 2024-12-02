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

        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
            <ul class="team-repeater-list">
                <!-- Dynamic items will be added here -->
            </ul>
            <button type="button" class="button add-team-member"><?php _e('Add Team Member', 'mytheme'); ?></button>
        </label>

        <?php

    }

}

