<?php
/**
 * Custom Controls of theme
 *
 * @package Agency_Ecommerce
 */

class Mantrabrain_Theme_Customizer_Control_Switch extends WP_Customize_Control
{

    public function enqueue()
    {
        $css_uri = YATRI_THEME_URI . 'mantrabrain-theme/customizer/controls/switch/';

        $js_uri = YATRI_THEME_URI . 'mantrabrain-theme/customizer/controls/switch/';

        wp_enqueue_style('yatri-control-switch-style', $css_uri . 'switch.css', null, YATRI_THEME_VERSION);

    }

    public function render_content()
    {
        $name = '_customize-switch-' . $this->id;
        ?>
        <div class="mb-switch-control-wrap">
            <label for="<?php echo esc_attr($name); ?>"><?php echo esc_html($this->label); ?></label>
            <label class="mb-switch-control">
                <input type="checkbox" value="0"
                       name="<?php echo esc_attr($name); ?>" id="<?php echo esc_attr($this->id) ?>"
                       data-customize-setting-link="<?php echo esc_attr($this->id); ?>"
                    <?php checked(1, $this->value()); ?>>
                <span class="slider round"></span>
            </label>
        </div>
        <?php
    }
}