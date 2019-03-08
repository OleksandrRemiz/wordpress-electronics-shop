<?php
require_once('classes/class_theme_electronics.php');
require_once('classes/class_custom_post_type.php');
require_once('classes/class_taxonomy_create.php');

$theme_electronics = new Theme_electronics;
$theme_electronics -> index();

$custom_post_type_electronics = new Custom_post_type;
$custom_post_type_electronics -> electronics_post_type_create();

$taxonomy_electronics_type = new Taxonomy_create;
$taxonomy_electronics_type -> index();


function taxonomy_electronics_manufacturer_create() {	
	register_taxonomy('electronics_manufacturer',
		array('electronics'),
		array(
			'hierarchical' => true,
			'labels' => array(
				'name' => 'Производители',
				'singular_name' => 'Производитель',
				'search_items' =>  'Найти производителя',
				'popular_items' => 'Популярные производители',
				'all_items' => 'Все производители',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать производителя', 
				'update_item' => 'Обновить производителя',
				'add_new_item' => 'Добавить нового производителя',
				'new_item_name' => 'Название нового производителя',
				'separate_items_with_commas' => 'Разделяйте производителей запятыми',
				'add_or_remove_items' => 'Добавить или удалить производителя',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых производителей',
				'menu_name' => 'Производители'
			),
			'public' => true, 
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'manufacturers',
				'hierarchical' => true
			),
		)
	);
}
add_action( 'init', 'taxonomy_electronics_manufacturer_create', 1 );

function taxonomy_electronics_color_create() {	
	register_taxonomy('electronics_color',
		array('electronics'),
		array(
			'hierarchical' => true,
			'labels' => array(
				'name' => 'Цвет',
				'singular_name' => 'Цвет',
				'search_items' =>  'Найти цвет',
				'popular_items' => 'Популярные цвета',
				'all_items' => 'Все цвета',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать цвет', 
				'update_item' => 'Обновить цвет',
				'add_new_item' => 'Добавить новый цвет',
				'new_item_name' => 'Название нового цвета',
				'separate_items_with_commas' => 'Разделяйте цвета запятыми',
				'add_or_remove_items' => 'Добавить или удалить цвет',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых цветов',
				'menu_name' => 'Цвета'
			),
			'public' => true, 
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'colors',
				'hierarchical' => true
			),
		)
	);
}
add_action( 'init', 'taxonomy_electronics_color_create', 2 );
?>