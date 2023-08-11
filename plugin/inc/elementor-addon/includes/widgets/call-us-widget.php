<?php

namespace Elementor_Restaurant_Site_Addon;

class Elementor_Call_Us_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'rs_call_us-widget';
    }

    public function get_title()
    {
        return esc_html__('Call Us widget', 'restaurant-site-core');
    }

    public function get_icon()
    {
        // return 'eicon-code';
        return 'eicon-check-circle-o';


    }

    public function get_categories()
    {
        return [ 'restaurant-site' ];
    }

    public function get_keywords()
    {
        return [ 'Call Us', 'widget', 'restaurant site' ];
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
            'icon_reviews',
            [
                'label' => esc_html__('Choose Image', 'restaurant-site-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'orang-sercle',
            [
                'label' => esc_html__('Choose Image', 'restaurant-site-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'text-1',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__('Text 1', 'restaurant-site-core'),
                'placeholder' => esc_html__('Enter your text', 'restaurant-site-core'),
                'default' => __(wp_kses('READ <span>REVIEWS</span>', 'post'), 'restaurant-site-core'),
            ]
        );

        $this->add_control(
            'text-2',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__('Text 2', 'restaurant-site-core'),
                'placeholder' => esc_html__('Enter your text', 'restaurant-site-core'),
                'default' => __(wp_kses('<span>HOME DELIVERY</span>', 'post'), 'restaurant-site-core'),
            ]
        );


        // $this->add_control(
        // 	'title',
        // 	[
        // 		'type' => \Elementor\Controls_Manager::TEXT,
        // 		'label' => esc_html__( 'Title', 'restaurant-site-core' ),
        // 		'placeholder' => esc_html__( 'Enter your title', 'restaurant-site-core' ),
        // 		'default' => esc_html__(  '**Teast your fav call_us**', 'restaurant-site-core'),
        // 	]
        // );

        // $this->add_control(
        // 	'sub-title',
        // 	[
        // 		'type' => \Elementor\Controls_Manager::TEXT,
        // 		'label' => esc_html__( 'Sub-title', 'restaurant-site-core' ),
        // 		'placeholder' => esc_html__( 'Enter your sub-title', 'restaurant-site-core' ),
        // 		'default' => 'from <span>luxury restaurent.</span>',
        // 	]
        // );

        // $this->add_control(
        // 	'background-gallery',
        // 	[
        // 		'label' => esc_html__( 'Add Images', 'restaurant-site-core' ),
        // 		'type' => \Elementor\Controls_Manager::GALLERY,
        // 		'show_label' => false,
        // 		'default' => [],
        // 	]
        // );

        // $this->add_control(
        // 	'explore-food-menu__title',
        // 	[
        // 		'type' => \Elementor\Controls_Manager::TEXT,
        // 		'label' => esc_html__( 'Text', 'restaurant-site-core' ),
        // 		'placeholder' => esc_html__( 'Enter your text', 'restaurant-site-core' ),
        // 		'default' => esc_html__(  'Explore food Menu', 'restaurant-site-core'),
        // 	]
        // );

        // $this->add_control(
        // 	'exlore-food-menu__img',
        // 	[
        // 		'label' => esc_html__( 'Choose Image', 'restaurant-site-core' ),
        // 		'type' => \Elementor\Controls_Manager::MEDIA,
        // 		'default' => [
        // 			'url' => \Elementor\Utils::get_placeholder_image_src(),
        // 		],
        // 	]
        // );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        ?>

      <?php global $restaurant_site_options; ?>

			<nav class="about-row__top-menu">
				<a href="#" class="read">
						<?php echo $settings['icon_reviews']['url'] ? '<img src="' . esc_url($settings['icon_reviews']['url']) . '" alt="icon reviews">' : ''; ?>
						<div><?php echo $settings['text-1'] ? __(wp_kses($settings['text-1'], 'post')) : '' ?></div>
						<?php echo $settings['orang-sercle']['url'] ? '<img src="' . esc_url($settings['orang-sercle']['url']) . '" alt="orang sercle">' : ''; ?>
				</a>

				<?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['home_delivery']) {   ?>
				<a href="tel: <?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['home_delivery']) : "" ?> " class="about-call-us">
						<img src="img/icon_phone.png" class="read__cercle" alt="">
						<div class="about-call-us__text">
							CALL US NOW FOR	<br>
							<?php echo $settings['text-2'] ? __(wp_kses($settings['text-2'], 'post')) : '' ?>
						</div>
						<div class="phone-number">
							<?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['home_delivery']) : "" ; ?>
						</div>
				</a>
				<?php }?>

			</nav>
    

		<?php
    }
}
