<?php



class rstr_Recent_Posts_Widget extends WP_Widget {
	// function __construct($id_base, $name, $widget_options = array(), $control_options = array()){
	function __construct() {
		parent::__construct(
			'rstr_recent_posts_widget',
			esc_html__( 'Recent post widget', 'restaurant-site' ),
			// $widget_options = array(
			array(
				'description' => esc_html__( '***Shows recent posts***', 'restaurant-site' )
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

		echo "<hr><br><br>";


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
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"> <?php esc_html_e( 'Title', 'restaurant-site' ) ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
				name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'text' ); ?>"> <?php esc_html_e( 'Text', 'restaurant-site' ) ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>"
				name="<?php echo $this->get_field_name( 'text' ); ?>" type="text"> <?php echo esc_attr( $text ) ?> </textarea>
		</p>



		<?php





	}


	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['text'] = strip_tags( $new_instance['text'] );


		return $instance;

	}
}