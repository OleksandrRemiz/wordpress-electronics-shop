<?php
// Template Name: Shop
// phpinfo();
get_header();
?>
<div class=''>
	<form>
		<?php
			$array_of_taxonomies_names = array(
				'electronics_types',
				'electronics_manufacturer',
				'electronics_color'
			);
			foreach($array_of_taxonomies_names as $taxonomy_name){
				$args = array('taxonomy' => $taxonomy_name);
				$terms = get_terms($args);
				foreach ($terms as $term_element) {
					if($term_element->parent == 0){
						echo $term_element->name;
					}
				}
				echo '<pre>';
				var_dump($terms);
				echo '</pre>';
				echo '================================';
			}

			// $args_manufacturer = array('taxonomy' => 'electronics_manufacturer');
			// $terms = get_terms($args_manufacturer);

			
		?>
	</form>
</div>
<div class=''>
<?php $service_slider = new WP_Query(array('post_type'=>'electronics', 'electronics_manufacturer'=>'xiaomi'));?>
<!-- <?php if ( $service_slider->have_posts() ) : ?>
	<?php while ( $service_slider->have_posts() ) : $service_slider->the_post(); ?>
	<div class="carousel-item">
		<div class="carousel-image"><?php the_post_thumbnail(); ?></div>
		<h2 class="owl-carousel-title"><?php the_title(); ?></h2>
		<div class="owl-carousel-text"><?php the_content(); ?></div>
	</div>
	<?php endwhile; ?>
<?php else: ?>
	<div class="no-carousel">Не найдено товаров по Вашим критериям</div>
<?php endif; ?> -->
<?php
			echo '<pre>';
// var_dump($service_slider);
			echo '</pre>';
?>
<?php wp_reset_query(); ?>
</div>
<?php get_footer(); ?>