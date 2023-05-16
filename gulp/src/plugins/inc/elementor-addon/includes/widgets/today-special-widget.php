<?php
namespace Elementor_Restaurant_Site_Addon;



class Elementor_Today_Special_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'rs_today_special-widget';
	}

	public function get_title() {
		return esc_html__( 'Today Special widget', 'restaurant-site-core' );
	}

	public function get_icon() {
		// return 'eicon-code';
		return 'eicon-check-circle-o';


	}

	public function get_categories() {
		return [ 'restaurant-site' ];
	}

	public function get_keywords() {
		return [ 'Today_Special', 'widget', 'restaurant site' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'restaurant-site-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

			]
		);

		// $this->add_control(
		// 	'title',
		// 	[
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'label' => esc_html__( 'Title', 'restaurant-site-core' ),
		// 		'placeholder' => esc_html__( 'Enter your title', 'restaurant-site-core' ),
		// 		'default' => esc_html__(  'Today_Special Restaurant', 'restaurant-site-core'),
		// 	]
		// );

		// $this->add_control(
		// 	'text',
		// 	[
		// 		'type' => \Elementor\Controls_Manager::TEXTAREA,
		// 		'rows' => 10,
		// 		'label' => esc_html__( 'Text', 'restaurant-site-core' ),
		// 		'placeholder' => esc_html__( 'Enter your text', 'restaurant-site-core' ),
		// 		'default' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate itaque dolorum exercitationem officiis maiores natus repellat error mollitia tempora tenetur provident architecto soluta, enim vero fuga quidem fugit inventore quisquam! Fuga doloribus nisi placeat, amet facere rem deserunt vitae ad tenetur dicta error omnis ',
		// 	]
		// );

		// $this->add_control(
		// 	'image',
		// 	[
		// 		'label' => esc_html__( 'Choose Image', 'restaurant-site-core' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
		// 			'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 		],
		// 	]
		// );

		// $this->add_control(
		// 	'button-value',
		// 	[
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'label' => esc_html__( 'Button Value', 'restaurant-site-core' ),
		// 		'placeholder' => esc_html__( 'Enter button value', 'restaurant-site-core' ),
		// 		'default' => esc_html__(  'READ MORE', 'restaurant-site-core'),
		// 	]
		// );

		// $this->add_control(
		// 	'gallery',
		// 	[
		// 		'label' => esc_html__( 'Add Images', 'restaurant-site-core' ),
		// 		'type' => \Elementor\Controls_Manager::GALLERY,
		// 		'show_label' => false,
		// 		'default' => [],
		// 	]
		// );


		$this->end_controls_section();
	}

	protected function render() {
		
		$settings = $this->get_settings_for_display();

		?>

<section>
   <div class="background background__today">
      <div class="swiper-today swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="@img/today-bg-1.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="@img/today-bg-2.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="@img/today-bg-3.jpg" alt=""></div>
            </div>
         </div>
         <div class="swiper-pagination-today swiper-pagination"></div>
      </div>

      <div class="conteiner" id="today">
         <h2> Today Special </h2>
         <div class="today-row">
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="@img/food-menu-card-img.jpg" alt=""></div>
               <div class="food-card__food-name">
                  <h3>Food Name one</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eveniet obcaecati sed numquam
                     explicabo reiciendis fuga veniam laudantium maiores
                  </p>
               </div>
               <footer class="food-card__order-block">
                  <div class="food-card__title">home <p>delivery</p>
                  </div>
                  <?php if ( $restaurant_site_options['home_delivery'] ){ ?>
                  <a href="<?php echo esc_html( $restaurant_site_options['home_delivery'] );?>"
                     class="food-card__phone-namber">
                     <?php echo esc_html( $restaurant_site_options['home_delivery'] ); ?>
                  </a>
                  <?php }?>


                  @@include('./parts/price.html',{"price":'89.00'})
               </footer>
            </article>
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="@img/food-menu-card-img.jpg" alt=""></div>
               <div class="food-card__food-name">
                  <h3>Food Name one</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eveniet obcaecati sed numquam
                     explicabo reiciendis fuga veniam laudantium maiores
                  </p>
               </div>
               <footer class="food-card__order-block">
                  <div class="food-card__title">home <p>delivery</p>
                  </div>
                  <a href="tel:1008005006" class="food-card__phone-namber">1-008 005 006</a>
                  @@include('./parts/price.html',{"price":'99.00'})
               </footer>
            </article>

         </div>

      </div>
   </div>
</section>

		<?php
	}
}