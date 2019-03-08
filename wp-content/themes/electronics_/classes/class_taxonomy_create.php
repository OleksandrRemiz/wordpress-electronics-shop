<?php
Class Taxonomy_create{
	function index(){
		function taxonomy_create() {
			$labels = array(
				'name' => 'Типы электротоваров',
				'singular_name' => 'Тип электротовара',
				'search_items' =>  'Найти электротовар',
				'popular_items' => 'Популярные электротовары',
				'all_items' => 'Все электротовары',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать электротовар', 
				'update_item' => 'Обновить электротовар',
				'add_new_item' => 'Добавить новый электротовар',
				'new_item_name' => 'Название нового электротовара',
				'separate_items_with_commas' => 'Разделяйте электротовары запятыми',
				'add_or_remove_items' => 'Добавить или удалить электротовар',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых электротоваров',
				'menu_name' => 'Типы электротоваров'
			);
			$slug = 'electronics';
			$details_array = array(
				'hierarchical' => true,
				'labels' => $labels,
				'public' => true, 
				'show_in_nav_menus' => true,
				'show_ui' => true,
				'show_tagcloud' => true,
				'update_count_callback' => '_update_post_term_count',
				'query_var' => true,
				'rewrite' => array(
					'slug' => $slug,
					'hierarchical' => true
				),
			);
			register_taxonomy(
				'electronics_types',
				array('electronics'),
				$details_array
			);
		}
		add_action( 'init', 'taxonomy_create', 0 );
	}
}
?>