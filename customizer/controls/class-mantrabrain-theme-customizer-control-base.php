<?php

class Mantrabrain_Theme_Customizer_Control_Base extends WP_Customize_Control
{

    public $label = '';

    public $fields = array();

    /**
     * Option description.
     *
     * @since 1.0.0
     * @var string $description
     */
    public $description = '';

    public function field_header()
    {
        echo '<div class="yatri-field-header">';
        if (!empty($this->label)) {
            echo '<span class="customize-control-title">' . esc_html($this->label) . '</span>';
        }
        if (!empty($this->description)) {
            echo '<span class="description customize-control-description">' . esc_html($this->description) . '</span>';
        }
        echo '</div>';

    }

    public function device_selector()
    {
        ?>
        <div class="devices yatri-devices">
            <button type="button" class="preview-desktop active" aria-pressed="true"
                    data-device="desktop">
                <span class="screen-reader-text"><?php echo esc_html__('Enter desktop preview mode', 'yatri'); ?></span>
            </button>
            <button type="button" class="preview-tablet" aria-pressed="false"
                    data-device="tablet">
                <span class="screen-reader-text"><?php echo esc_html__('Enter tablet preview mode', 'yatri'); ?></span>
            </button>
            <button type="button" class="preview-mobile" aria-pressed="false"
                    data-device="mobile">
                <span class="screen-reader-text"><?php echo esc_html__('Enter mobile preview mode', 'yatri'); ?></span>
            </button>
        </div>
        <?php
    }

    public function device_template_wrap_start($device = 'desktop')
    {
        ?>
        <div class="yatri-field-settings-inner yatri--for-<?php echo esc_attr($device) ?>"
         data-for-device="<?php echo esc_attr($device); ?>">
        <?php
    }

    public function device_template_wrap_end()
    {
        echo '</div>';
    }

}
