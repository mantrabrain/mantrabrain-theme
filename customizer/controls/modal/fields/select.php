<div class="yatri-field-wrap" data-field-name="<?php echo esc_attr($field_name) ?>"
     data-field-type="<?php echo esc_attr($field_type) ?>" <?php echo $device_attr; ?> >
    <div class="yatri--field yatri--field-select clear yatri--field-name-border_style" data-required=""
         data-field-name="border_style">

        <?php
        $select_value = isset($field_value['value']) ? $field_value['value'] : array();
        $options = isset($field['options']) ? $field['options'] : array(); ?>
        <select class="yatri-modal-input yatri-change-by-js" data-field-key="value">
            <?php foreach ($options as $option_key => $option_value) {
                ?>
                <option <?php echo $select_value == $option_key ? 'selected="selected"' : '' ?>
                        value="<?php echo esc_attr($option_key); ?>"><?php echo esc_html($option_value); ?></option>
                <?php
            }
            ?>

        </select>

    </div>

</div>