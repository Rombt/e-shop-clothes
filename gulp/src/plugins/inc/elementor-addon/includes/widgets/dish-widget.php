<?php
class Elementor_Dish_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Dish-widget';
	}

	public function get_title() {
		return esc_html__( 'Dish widget', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'Dish', 'widget' ];
	}

	protected function render() {
		?>

		<p> ****** Dish widget *************** </p>

		<?php
	}
}