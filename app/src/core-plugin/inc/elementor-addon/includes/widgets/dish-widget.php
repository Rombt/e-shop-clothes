<?php

namespace Elementor_Restaurant_Site_Addon;



class Elementor_Dish_Widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'rs_dish-widget';
	}

	public function get_title()
	{
		return esc_html__('Dish widget', 'restaurant-site-core');
	}

	public function get_icon()
	{
		// return 'eicon-code';
		return 'eicon-check-circle-o';
	}

	public function get_categories()
	{
		return ['restaurant-site'];
	}

	public function get_keywords()
	{
		return ['Dish', 'widget', 'restaurant site'];
	}

	protected function register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'restaurant-site-core'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

			]
		);

		$this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Title', 'restaurant-site-core'),
				'placeholder' => esc_html__('Enter your title', 'restaurant-site-core'),
				'default' => esc_html__('Teast your fav dish', 'restaurant-site-core'),
			]
		);

		$this->add_control(
			'sub-title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Sub-title', 'restaurant-site-core'),
				'placeholder' => esc_html__('Enter your sub-title', 'restaurant-site-core'),
				'default' => __(wp_kses('from <span>luxury restaurent.</span>', 'post')),
			]
		);

		$this->add_control(
			'background-gallery',
			[
				'label' => esc_html__('Add Images', 'restaurant-site-core'),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
			]
		);

		$this->add_control(
			'explore-food-menu__title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__('Text', 'restaurant-site-core'),
				'placeholder' => esc_html__('Enter your text', 'restaurant-site-core'),
				'default' => esc_html__('Explore food Menu', 'restaurant-site-core'),
			]
		);

		$this->add_control(
			'exlore-food-menu__img',
			[
				'label' => esc_html__('Choose Image', 'restaurant-site-core'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{

		$settings = $this->get_settings_for_display();

?>

		<div class="background background__dish">
			<div class="swiper-dish swiper">
				<div class="swiper-wrapper">

					<?php if ($settings['background-gallery']) {
						foreach ($settings['background-gallery'] as $image) {	 ?>
							<div class="swiper-slide">
								<div class="wrap-img dish__wrap-img"> <img src=" <?php echo esc_attr($image['url']) ?> " alt="background dish"></div>
							</div>
					<?php }
					} ?>

				</div>
				<div class="swiper-pagination-dish swiper-pagination"></div>
			</div>
			<div class="rstr-container" id="dish">
				<div class="dish-title">
					<p class="dish-title__title"><?php echo $settings['title'] ? esc_html__($settings['title']) : '' ?> </p>
					<p class="dish-title__subtitle-title"><?php echo $settings['sub-title'] ? __(wp_kses($settings['sub-title'], 'post')) : '' ?> </p>
				</div>
				<div class="exlore-food-menu">
					<?php echo $settings['exlore-food-menu__img']['url'] ? '<img src="' . esc_url($settings['exlore-food-menu__img']['url']) . '" alt="exlore-food-menu.jpg">' : ''; ?>
					<p><?php echo $settings['explore-food-menu__title'] ? esc_html__($settings['explore-food-menu__title']) : '' ?></p>
				</div>
			</div>
		</div>

<?php
	}
}
