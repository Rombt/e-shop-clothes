<?php
namespace Elementor_Restaurant_Site_Addon;



class Elementor_Dish_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'rs_dish-widget';
	}

	public function get_title() {
		return esc_html__( 'Dish widget', 'restaurant-site-core' );
	}

	public function get_icon() {
		// return 'eicon-code';
		return 'eicon-check-circle-o';


	}

	public function get_categories() {
		return [ 'restaurant-site' ];
	}

	public function get_keywords() {
		return [ 'Dish', 'widget', 'restaurant site' ];
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
				'placeholder' => esc_html__( 'Teast your fav dish', 'restaurant-site-core' ),
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




		$this->end_controls_section();
	}




	protected function render() {
		
		$settings = $this->get_settings_for_display();

		?>

		<div class="background background__dish">
    <div class="swiper-dish swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="wrap-img dish__wrap-img"> <img src=" <?php echo $settings['image']['url'] ?> " alt=""></div>
            </div>
            <div class="swiper-slide">
                <div class="wrap-img dish__wrap-img"> <img src="@img/dish-bg-2.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
                <div class="wrap-img dish__wrap-img"> <img src="@img/dish-bg-3.jpg" alt=""></div>
            </div>
        </div>
        <div class="swiper-pagination-dish swiper-pagination"></div>
    </div>
    <div class="conteiner" id="dish">
        <div class="dish-title">
            <p class="dish-title__title">Teast your fav dish</p>
            <p class="dish-title__subtitle-title">from <span>luxury restaurent.</span></p>
        </div>
        <div class="exlore-food-menu">
            <img src="./img/exlore-food-menu.png" alt="exlore-food-menu.jpg">
            <p>Explore food Menu</p>
        </div>
    </div>
</div>

		<?php
	}
}