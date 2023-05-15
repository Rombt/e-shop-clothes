<?php
namespace Elementor_Restaurant_Site_Addon;



class Elementor_Call_Us_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'rs_call_us-widget';
	}

	public function get_title() {
		return esc_html__( 'Call Us widget', 'restaurant-site-core' );
	}

	public function get_icon() {
		// return 'eicon-code';
		return 'eicon-check-circle-o';


	}

	public function get_categories() {
		return [ 'restaurant-site' ];
	}

	public function get_keywords() {
		return [ 'Call Us', 'widget', 'restaurant site' ];
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
				'default' => esc_html__(  '**Teast your fav call_us**', 'restaurant-site-core'),
			]
		);

		$this->add_control(
			'sub-title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Sub-title', 'restaurant-site-core' ),
				'placeholder' => esc_html__( 'Enter your sub-title', 'restaurant-site-core' ),
				'default' => 'from <span>luxury restaurent.</span>',
			]
		);

		$this->add_control(
			'background-gallery',
			[
				'label' => esc_html__( 'Add Images', 'restaurant-site-core' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
			]
		);

		$this->add_control(
			'explore-food-menu__title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Text', 'restaurant-site-core' ),
				'placeholder' => esc_html__( 'Enter your text', 'restaurant-site-core' ),
				'default' => esc_html__(  'Explore food Menu', 'restaurant-site-core'),
			]
		);

		$this->add_control(
			'exlore-food-menu__img',
			[
				'label' => esc_html__( 'Choose Image', 'restaurant-site-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		
		$settings = $this->get_settings_for_display();

		?>

<div class="conteiner" id="call_us">
    <?php global $restaurant_site_options; ?>

    <nav class="call_us-row__top-menu">
        <a href="#" class="read">
            <img src="@img/icon_reviews.png" class="read__icon" alt="reviews">
            <div>READ <p>REVIEWS</p>
            </div>
            <img src="@img/orang-sercle.png" class="read__cercle" alt="">
        </a>

        <?php if ($restaurant_site_options['home_delivery']){   ?>
        <a href="tel: <?php echo esc_html( $restaurant_site_options['home_delivery'] ) ?> " class="call_us-call-us">


            <img src="@img/icon_phone.png" class="read__cercle" alt="">
            <div class="call_us-call-us__text">
                CALL US NOW FOR
                <p>HOME DELIVERY</p>
            </div>
            <div class="phone-number">
                <?php echo esc_html( $restaurant_site_options['home_delivery'] ); ?>
            </div>
        </a>
        <?php }?>

    </nav>
    

		<?php
	}
}