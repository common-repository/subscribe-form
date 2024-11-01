<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include('subscribeform1-settings.php');
?>
<div id="sfbip-form1-options-contaner" class="sfbip-form-options-contaner">
	<table>
		<tr>
			<td>
				<h2>Form Width:</h2>
			</td>
			<td>
				<input type="number" id="sfbip-form1-width" name="sfbip-form1-width" value="<?php echo $form_width; ?>" placeholder="Form Width (px)" /> 
			</td>
		</tr>
		<tr>
			<td>
				<h2>Form Background Image:</h2>
			</td>
			<td>
			<input type="button" name="upload-btn" id="sfbip-image-upload-button" class="button-secondary sfbip-image-upload-button" value="Select Background Image" /><br/><br/>
				<input type="button" name="sfbip-remove-image" id="sfbip-remove-image" class="button-secondary" value="Remove Background Image" /><br/><br/>
				<img id="sfbip-preview-background-image" width="200px" class="sfbip-form-background-image" src="<?php echo $form_background_image; ?>"/><br/>
				<input type="hidden" name="sfbip-form1-background-image" id="sfbip-form1-background-image" class="sfbip-form1-background-image" value="<?php echo $form_background_image; ?>" />
			</td>

		</tr>
		<tr>
			<td>
				<h2>Form Background Color:</h2>
			</td>
			<td>
				<input type="text" id="sfbip-form1-background-color" class="sfbip-color-picker" name="sfbip-form1-background-color" value="<?php echo $form_background_color; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<h2>Form Heading:</h2>
			</td>
			<td>
				<input type="text" id="sfbip-form1-heading" name="sfbip-form1-heading" value="<?php echo $form_heading; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<h2>Heading Color: </h2>
			</td>
			<td>
				<input type="text" id="sfbip-form1-heading-color" class="sfbip-color-picker" name="sfbip-form1-heading-color" value="<?php echo $form_heading_color; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<h2>Subscribe Button Text: </h2>
			</td>
			<td>
				<input type="text" id="sfbip-form1-subscribe-button-text" name="sfbip-form1-subscribe-button-text" value="<?php echo $button_text; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<h2>Form Border:</h2>
			</td>
			<td>
				<input type="number" id="sfbip-form1-border-size" name="sfbip-form1-border-size" value="<?php echo $border_size; ?>" placeholder="Border Width Size (px)" /><br/>
				<select id="sfbip-form1-border-style" name="sfbip-form1-border-style">
					<option value="none" <?php selected( $border_style, 'none' ); ?> >Select Border Style</option>
					<option value="solid" <?php selected( $border_style, 'solid' ); ?> >Solid</option>
					<option value="dashed" <?php selected( $border_style, 'dashed' ); ?> >Dashed</option>
					<option value="dotted" <?php selected( $border_style, 'dotted' ); ?> >Dotted</option>
					<option value="double" <?php selected( $border_style, 'double' ); ?> >Double</option>
					<option value="groove" <?php selected( $border_style, 'groove' ); ?> >Groove</option>
					<option value="inset" <?php selected( $border_style, 'inset' ); ?> >Inset</option>
					<option value="outset" <?php selected( $border_style, 'outset' ); ?> >Outset</option>
					<option value="ridge" <?php selected( $border_style, 'ridge' ); ?> >Ridge</option>
				</select>	<br/>
				<input type="text" id="sfbip-form1-border-color" name="sfbip-form1-border-color" value="<?php echo $border_color; ?>" class="sfbip-color-picker" />

			</td>
		</tr>
		<tr>
			<td>
				<h2>Name Field Border Color:</h2>
			</td>
			<td>
				<input type="text" id="sfbip-form1-name-field-border-color" class="sfbip-color-picker" name="sfbip-form1-name-field-border-color" value="<?php echo $name_border_color; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<h2>Email Field Border Color:</h2>
			</td>
			<td>
				<input type="text" id="sfbip-form1-email-field-border-color" class="sfbip-color-picker" name="sfbip-form1-email-field-border-color" value="<?php echo $email_border_color; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<h2>Subscribe Button Background Color:
				</td>
				<td>
					<input type="text" id="sfbip-form1-button-background-color" class="sfbip-color-picker" name="sfbip-form1-button-background-color" value="<?php echo $button_background_color; ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<h2>Subscribe Button Text Size:</h2>
				</td>
				<td>
					<input type="number" id="sfbip-form1-button-text-size" name="sfbip-form1-button-text-size" value="<?php echo $button_text_size; ?>" placeholder="Test Size (px)" />
				</td>
			</tr>
			<tr>
				<td>
					<h2>Subscribe Button Text Color:</h2>
				</td>
				<td>
					<input type="text" id="sfbip-form1-button-text-color" class="sfbip-color-picker" name="sfbip-form1-button-text-color" value="<?php echo $button_text_color; ?>" />
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</table>

	</div>