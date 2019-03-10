<?php
Class Theme_electronics{
	public $menus_array = array(
		'header_menu' => 'Меню в хедере',
		'footer_menu' => 'Меню в футере'
	);
	function index(){
		add_theme_support('post-thumbnails');
		register_nav_menus($this->menus_array);

		add_action( 'wp_enqueue_scripts', 'electronics_scripts' );
		function electronics_scripts() {
			// wp_enqueue_style( 'main-style-css', get_template_directory_uri() . "/style.css" );
		
			wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js' );
			wp_enqueue_script( 'main-script-name', get_template_directory_uri() . '/js/script.js' );
		}
	}
	function ajax_products_filter(){
		add_action( 'wp_ajax_ajax_electronics_filter', 'ajax_electronics_filter_function' );
		add_action( 'wp_ajax_nopriv_ajax_electronics_filter', 'ajax_electronics_filter_function' );
		function ajax_electronics_filter_function(){
			$x = $_POST['x1'];
			// $x = 13;
			$manufacturer_filter = 'Apple';
			$html = "";
			$service_slider = new WP_Query(array('post_type'=>'electronics', 'electronics_manufacturer'=>$manufacturer_filter));
			// $html = $x . "";
			if ( $service_slider->have_posts() ) : 
				while ( $service_slider->have_posts() ) : $service_slider->the_post();
				$html += "<div class='product_in_shop'>
					<div class='carousel-image'>" . the_post_thumbnail() . "</div>
					<h2 class='owl-carousel-title'>" . the_title() . "</h2>
					<div class='owl-carousel-text'>" . the_content() . "</div>
				</div>";
				endwhile; ?>
			<?php else: 
				$html += "<div class='no-carousel'>Не найдено товаров по Вашим критериям</div>";
			endif;
				// echo '<pre>';
				// var_dump($service_slider);
				// echo '</pre>';
			?>
			<?php wp_reset_query();
			echo $html;
			die;
		}
	}
}
?>