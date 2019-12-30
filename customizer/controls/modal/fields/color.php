<div class="yatri-field-wrap" data-field-name="<?php echo esc_attr($field_name) ?>"
     data-field-type="<?php echo esc_attr($field_type) ?>" <?php echo $device_attr; ?> >
    <?php
    $color_value = isset($field_value['value']) ? $field_value['value'] : '';
    ?>
    <div class="yatri-input-color">
        <input data-field-key="value" data-default="#444" type="text"
               class="yatri-color-picker yatri-change-by-js"
               value="<?php echo esc_attr($color_value) ?>"/>
    </div>
</div>