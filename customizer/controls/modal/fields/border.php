<div class="yatri-field-wrap" data-field-name="<?php echo esc_attr($field_name) ?>"
     data-field-type="<?php echo esc_attr($field_type) ?>" <?php echo $device_attr; ?> >
    <div class="yatri--field yatri--field-select clear yatri--field-name-border_style">
        <?php
        $border_value = isset($field_value['value']) ? $field_value['value'] : array();
        ?>
        <div class="yatri-field-header">

            <div class="yatri-field-heading">
                <label class="customize-control-title">Border Style</label>
            </div>


        </div>
        <?php $css_border_styles = Mantrabrain_Theme_Helper::css_border_styles(); ?>
        <select class="yatri-change-by-js border_style" data-field-key="value">

            <?php foreach ($css_border_styles as $border_key => $border_val) { ?>
                <option <?php echo isset($border_value['style']) && $border_value['style'] == $border_key ? 'selected="selected"' : ''; ?>
                        value="<?php echo esc_attr($border_key) ?>"><?php echo esc_html($border_val); ?></option>
            <?php } ?>

        </select>

    </div>

    <div class="yatri-input-border-width">
        <div class="yatri-field-header">

            <div class="yatri-field-heading">
                <label class="customize-control-title">Border Width</label>
            </div>


        </div>
        <div class="yatri--css-ruler yatri--field-inputs">
				<span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_top"
                           value="<?php echo isset($border_value['border_top']) ? absint($border_value['border_top']) : '' ?>"/>
					<span class="yatri--small-label"><?php echo __('Top', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_right"
                           value="<?php echo isset($border_value['border_right']) ? absint($border_value['border_right']) : '' ?>"/>
					<span class="yatri--small-label"><?php echo __('Right', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_bottom"
                           value="<?php echo isset($border_value['border_bottom']) ? absint($border_value['border_bottom']) : '' ?>"/>
					<span class="yatri--small-label"><?php echo __('Bottom', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_left"
                           value="<?php echo isset($border_value['border_left']) ? absint($border_value['border_left']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('Left', 'yatri'); ?></span>
				</span>
            <label title="Toggle values together"
                   class="yatri--css-ruler-link  yatri--label-active">
                <input type="checkbox"
                       class="yatri--label-parent"
                       checked="checked" value="1">
            </label>
        </div>
    </div>
    <div class="yatri-input-color">

        <div class="yatri-field-header">

            <div class="yatri-field-heading">
                <label class="customize-control-title">Border Color</label>
            </div>


        </div>
        <input data-default="#444" type="text" class="yatri-color-picker yatri-change-by-js border_color"
               value="<?php echo isset($border_value['border_color']) ? esc_attr($border_value['border_color']) : '' ?>"/>
    </div>
    <div class="yatri-input-border-radius">
        <div class="yatri-field-header">

            <div class="yatri-field-heading">
                <label class="customize-control-title">Border Radius</label>
            </div>


        </div>
        <div class="yatri--css-ruler yatri--field-inputs">
				<span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_radius_top"
                           value="<?php echo isset($border_value['border_radius_top']) ? absint($border_value['border_radius_top']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('Top', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_radius_right"
                           value="<?php echo isset($border_value['border_radius_right']) ? absint($border_value['border_radius_right']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('Right', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_radius_bottom"
                           value="<?php echo isset($border_value['border_radius_bottom']) ? absint($border_value['border_radius_bottom']) : '' ?>"/>
					<span class="yatri--small-label"><?php echo __('Bottom', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js border_radius_left"
                           value="<?php echo isset($border_value['border_radius_left']) ? absint($border_value['border_radius_left']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('Left', 'yatri'); ?></span>
				</span>
            <label title="Toggle values together"
                   class="yatri--css-ruler-link  yatri--label-active">
                <input type="checkbox"
                       class="yatri--label-parent"
                       checked="checked" value="1">
            </label>
        </div>
    </div>
    <div class="yatri-input-color">

        <div class="yatri-field-header">

            <div class="yatri-field-heading">
                <label class="customize-control-title">Box Shadow</label>
            </div>


        </div>
        <input data-default="#444" type="text" class="yatri-color-picker yatri-change-by-js box_shadow_color"
               value="<?php echo isset($border_value['box_shadow_color']) ? esc_attr($border_value['box_shadow_color']) : '' ?>"/>
    </div>
    <div class="yatri-input-box-shadow-size">
        <div class="yatri-field-header">

            <div class="yatri-field-heading">
                <label class="customize-control-title">Box Size Values</label>
            </div>


        </div>
        <div class="yatri--css-ruler yatri--field-inputs">
				<span>
					<input type="number" class="yatri-input-css yatri-change-by-js box_shadow_x"
                           value="<?php echo isset($border_value['box_shadow_x']) ? absint($border_value['box_shadow_x']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('X', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js box_shadow_y"
                           value="<?php echo isset($border_value['box_shadow_y']) ? absint($border_value['box_shadow_y']) : '' ?>"/>
					<span class="yatri--small-label"><?php echo __('Y', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js box_shadow_blur"
                           value="<?php echo isset($border_value['box_shadow_blur']) ? absint($border_value['box_shadow_blur']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('BLUR', 'yatri'); ?></span>
				</span>
            <span>
					<input type="number" class="yatri-input-css yatri-change-by-js box_shadow_spread"
                           value="<?php echo isset($border_value['box_shadow_spread']) ? absint($border_value['box_shadow_spread']) : '' ?>"
                    />
					<span class="yatri--small-label"><?php echo __('SPREAD', 'yatri'); ?></span>
				</span>
            <span>
						<span class="input yatri--checked">
							<input <?php echo isset($border_value['box_shadow_inset']) && (boolean)$border_value['box_shadow_inset'] ? 'checked="checked"' : '' ?>
                                    type="checkbox" class="yatri-input-css yatri-change-by-js box_shadow_inset"
                                    value="">
						</span>
						<span class="yatri--small-label">inset</span>
					</span>
        </div>
    </div>
</div>