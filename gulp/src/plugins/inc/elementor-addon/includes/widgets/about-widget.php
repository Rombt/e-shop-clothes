<?php
namespace Elementor_Restaurant_Site_Addon;



class Elementor_About_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'rs_about-widget';
	}

	public function get_title() {
		return esc_html__( 'About widget', 'restaurant-site-core' );
	}

	public function get_icon() {
		// return 'eicon-code';
		return 'eicon-check-circle-o';


	}

	public function get_categories() {
		return [ 'restaurant-site' ];
	}

	public function get_keywords() {
		return [ 'About', 'widget', 'restaurant site' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'restaurant-site-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

			]
		);

		$this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'restaurant-site-core' ),
				'placeholder' => esc_html__( 'Enter your title', 'restaurant-site-core' ),
				'default' => esc_html__(  'About Restaurant', 'restaurant-site-core'),
			]
		);

		$this->add_control(
			'text',
			[
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'label' => esc_html__( 'Text', 'restaurant-site-core' ),
				'placeholder' => esc_html__( 'Enter your text', 'restaurant-site-core' ),
				'default' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate itaque dolorum exercitationem officiis maiores natus repellat error mollitia tempora tenetur provident architecto soluta, enim vero fuga quidem fugit inventore quisquam! Fuga doloribus nisi placeat, amet facere rem deserunt vitae ad tenetur dicta error omnis ',
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'restaurant-site-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'button-value',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Button Value', 'restaurant-site-core' ),
				'placeholder' => esc_html__( 'Enter button value', 'restaurant-site-core' ),
				'default' => esc_html__(  'READ MORE', 'restaurant-site-core'),
			]
		);

		$this->add_control(
			'gallery',
			[
				'label' => esc_html__( 'Add Images', 'restaurant-site-core' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
			]
		);


		$this->end_controls_section();
	}

	protected function render() {
		
		$settings = $this->get_settings_for_display();

		?>

		<div class="conteiner" id="about">
			<?php global $restaurant_site_options; ?>

			<section class="about-row">
				<div class="about-row__text">
						<h2><?php echo $settings['title'] ? esc_html__($settings['title']) : '' ?></h2>
						<p> <?php echo $settings['text'] ? esc_html__($settings['text']) : '' ?></p>
						<div class="about-row__text-buttons">
								<a href="#" class="button-orange"><?php echo $settings['button-value'] ? esc_html__($settings['button-value']) : '' ?></a>
							<div class="wrap-img">
								<?php echo $settings['image']['url'] ? '<img src="' . esc_url($settings['image']['url']) . '" alt="image about block">' : ''; ?>
							</div>
						</div>
				</div>
				<div class="about-row__img">

					<?php if ( $settings['gallery']) { 
						foreach ( $settings['gallery'] as $image ) {	 ?> <div class="wrap-img about-row__wrap-img"> <img src=" <?php echo esc_attr( $image['url']) ?> " alt="about galery"></div> 
					<?php }} ?>	
				</div>
			</section>
		</div>

		<?php
	}
}