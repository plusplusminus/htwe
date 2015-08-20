<?php

if ( ! class_exists( 'GFForms' ) ) {
	die();
}

class GF_Field_Post_Tags extends GF_Field {

	public $type = 'post_tags';

	public function get_form_editor_field_title() {
<<<<<<< HEAD
		return esc_attr__( 'Tags', 'gravityforms' );
=======
		return __( 'Tags', 'gravityforms' );
>>>>>>> origin/master
	}

	function get_form_editor_field_settings() {
		return array(
			'post_tag_type_setting',
			'conditional_logic_field_setting',
			'prepopulate_field_setting',
			'error_message_setting',
			'label_setting',
			'label_placement_setting',
			'admin_label_setting',
			'size_setting',
			'rules_setting',
			'default_value_setting',
			'visibility_setting',
			'description_setting',
			'css_class_setting',
<<<<<<< HEAD
			'placeholder_setting',
		);
	}

	public function is_conditional_logic_supported() {
=======
		);
	}

	public function is_conditional_logic_supported(){
>>>>>>> origin/master
		return true;
	}

	public function get_field_input( $form, $value = '', $entry = null ) {
<<<<<<< HEAD
		$form_id         = absint( $form['id'] );
=======
		$form_id         = $form['id'];
>>>>>>> origin/master
		$is_entry_detail = $this->is_entry_detail();
		$is_form_editor  = $this->is_form_editor();

		$id       = (int) $this->id;
		$field_id = $is_entry_detail || $is_form_editor || $form_id == 0 ? "input_$id" : 'input_' . $form_id . "_$id";

		$value        = esc_attr( $value );
		$size         = $this->size;
		$class_suffix = $is_entry_detail ? '_admin' : '';
		$class        = $size . $class_suffix;
		$class        = esc_attr( $class );

		$disabled_text = $is_form_editor ? 'disabled="disabled"' : '';

		$tabindex              = $this->get_tabindex();
		$logic_event           = $this->get_conditional_logic_event( 'keyup' );
		$placeholder_attribute = $this->get_field_placeholder_attribute();

		return "<div class='ginput_container'>
					<input name='input_{$id}' id='{$field_id}' type='text' value='{$value}' class='{$class}' {$tabindex} {$logic_event} {$placeholder_attribute} {$disabled_text}/>
				</div>";
	}

<<<<<<< HEAD
	public function allow_html() {
=======
	public function allow_html(){
>>>>>>> origin/master
		return true;
	}
}

GF_Fields::register( new GF_Field_Post_Tags() );