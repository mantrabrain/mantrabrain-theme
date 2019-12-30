<div class="yatri-field-wrap" data-field-name="<?php echo esc_attr($field_name) ?>"
     data-field-type="<?php echo esc_attr($field_type) ?>" <?php echo $device_attr; ?> >
    <?php
    $attrs = isset($field['attrs']) ? $field['attrs'] : array();
    $default = isset($field['default']) ? $field['default'] : array();

    $default_args = array(
        'color' => '',
    );
    $default_attributes = wp_parse_args($default, $default_args);

    $default_attrs = array(
        'alpha' => false
    );
    $attributes = wp_parse_args($attrs, $default_attrs);

    $color_value = isset($field_value['value']) ? $field_value['value'] : '';
    ?>
    <div class="yatri-input-color">
        <input data-alpha="<?php echo esc_attr($default_attrs['alpha']) ?>" data-field-key="value"
               data-default="<?php echo esc_attr($default_attributes['color']) ?>" type="text"
               class="yatri-color-picker yatri-change-by-js"
               value="<?php echo esc_attr($color_value) ?>"/>
    </div>
</div>