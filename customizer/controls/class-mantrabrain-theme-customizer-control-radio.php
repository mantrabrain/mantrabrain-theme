<?php
/**
 * Custom Controls of theme
 *
 * @package Agency_Ecommerce
 */

class Mantrabrain_Theme_Customizer_Control_Radio extends WP_Customize_Control
{
    public function enqueue()
    {
        $css_uri = YATRI_THEME_URI . 'mantrabrain-theme/customizer/controls/radio/';

        $js_uri = YATRI_THEME_URI . 'mantrabrain-theme/customizer/controls/radio/';

        wp_enqueue_style('yatri-control-radio-style', $css_uri . 'radio.css', null, YATRI_THEME_VERSION);

    }

    public function render_content()
    {
        $name = '_customize-radio-' . $this->id;

        $choices = isset($this->choices) ? $this->choices : array();
        ?>
        <div class="mb-radio-control-wrap">
            <label for="<?php echo esc_attr($name); ?>"
                   class="customize-control-title"><?php echo esc_html($this->label); ?></label>
            <?php if (!empty($this->description)) { ?>
                <span class="description customize-control-description"><p><?php echo esc_html($this->description); ?></p></span>
            <?php } ?>
            <ul class="mb-radio-control">
                <?php foreach ($choices as $choice_key => $choice) { ?>
                    <li>
                        <input type="radio" value="<?php echo esc_attr($choice_key) ?>"
                               name="<?php echo esc_attr($name); ?>" id="<?php echo esc_attr($this->id) ?>"
                               data-customize-setting-link="<?php echo esc_attr($this->id); ?>"
                            <?php checked($choice_key, $this->value()); ?>>
                        <label><?php echo esc_html($choice) ?></label>
                        <span class="checkmark"></span>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php
    }
}