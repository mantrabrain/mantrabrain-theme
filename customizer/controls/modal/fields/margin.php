<div class="yatri-field-wrap" data-field-name="<?php echo esc_attr($field_name) ?>"
     data-field-type="<?php echo esc_attr($field_type) ?>" <?php echo $device_attr; ?> >
    <div class="yatri--css-unit">
        <?php

        $unit = isset($field_value['top']['unit']) ? $field_value['top']['unit'] : 'px';

        $css_units = Mantrabrain_Theme_Helper::css_units();

        foreach ($css_units as $unit_key => $unit_value) {

            $active_class = $unit_key == $unit ? 'yatri--label-active' : '';
            ?>
            <label class="<?php echo esc_attr($active_class); ?>">
                <?php echo esc_html($unit_value) ?><input type="radio"
                                                          class="yatri--label-parent yatri-change-by-js"
                    <?php echo $unit_key == $unit ? 'checked="checked"' : ''; ?>
                                                          name="margin_unit"
                                                          value="<?php echo esc_attr($unit_key); ?>">
            </label>
        <?php } ?>
    </div>
    <div class="yatri--css-ruler yatri--field-inputs">
		<span>
					<input type="number" data-field-key="top" class="yatri-input-css yatri-change-by-js margin_top"
                           value="<?php echo isset($field_value['top']['value']) ? esc_attr($field_value['top']['value']) : ''; ?>"/>
					<span class="yatri--small-label"><?php echo __('Top', 'yatri'); ?></span>
		</span>
        <span>
        <input type="number" data-field-key="right" class="yatri-input-css yatri-change-by-js margin_right"
               value="<?php echo isset($field_value['top']['value']) ? esc_attr($field_value['right']['value']) : ''; ?>"/>
					<span class="yatri--small-label"><?php echo __('Right', 'yatri'); ?></span>
				</span>
        <span>
					<input type="number" data-field-key="bottom"
                           class="yatri-input-css yatri-change-by-js margin_bottom"
                           value="<?php echo isset($field_value['top']['value']) ? esc_attr($field_value['bottom']['value']) : ''; ?>"/>
					<span class="yatri--small-label"><?php echo __('Bottom', 'yatri'); ?></span>
				</span>
        <span>
					<input type="number" data-field-key="left" class="yatri-input-css yatri-change-by-js margin_left"
                           value="<?php echo isset($field_value['top']['value']) ? esc_attr($field_value['left']['value']) : ''; ?>"/>
					<span class="yatri--small-label"><?php echo __('Left', 'yatri'); ?></span>
        </span>
        <label
                class="yatri--css-ruler-link  yatri--label-active">
            <input type="checkbox"
                   class="yatri--label-parent"
                   checked="checked" value="1">
        </label>
    </div>
</div>