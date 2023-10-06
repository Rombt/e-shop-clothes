<?php



class rstr_Recent_Posts_Widget extends WP_Widget {
	// function __construct($id_base, $name, $widget_options = array(), $control_options = array()){
	function __construct() {
		parent::__construct(
			'rstr_recent_posts_widget',
			esc_html__( 'Recent post widget', 'restaurant-site' ),
			$widget_options = array(
				'description' => esc_html__( 'Shows recent posts', 'restaurant-site' )
			),
			// $control_options = array() 
		);
	}


	public function widget( $args, $instance ) {

		extract( $args );

		$title = apply_filters( 'widget_title', $instance['title'] );
		$text = apply_filters( 'the_content', $instance['text'] );

		echo $before_widget;

		if ( $title ) {
			echo $before_title . esc_html( $title ) . $after_title;
		}
		if ( $text ) {
			echo wp_kses_post( $text );
		}

		echo $after_widget;


	}

	public function form( $instance ) {

		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = '';
		}


		if ( isset( $instance['text'] ) ) {
			$text = $instance['text'];
		} else {
			$text = '';
		}

		?>
		<!-- вёрстка виджета -->


		*****************************
		<?php





	}


	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['text'] = strip_tags( $new_instance['text'] );


		return $instance;

	}
}