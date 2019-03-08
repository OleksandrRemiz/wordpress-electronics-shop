<?php
Class Custom_post_type{
	public function electronics_post_type_create(){
		function electronics_post_type(){
			register_post_type(
				'electronics',
				array(
				'labels'             => array(
					'name'               => 'Электроника',
					'singular_name'      => 'Электроника',
					'add_new'            => 'Добавить новую',
					'add_new_item'       => 'Добавить новую единицу электроники',
					'edit_item'          => 'Редактировать единицу электроники',
					'new_item'           => 'Новая единица электроники',
					'view_item'          => 'Посмотреть единицу электроники',
					'search_items'       => 'Найти единицу электроники',
					'not_found'          => 'Единиц электроники не найдено',
					'not_found_in_trash' => 'В корзине единиц электроники не найдено',
					'parent_item_colon'  => '',
					'menu_name'          => 'Электроника'
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => true,
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
			) );
		}
		add_action('init', 'electronics_post_type');
	}
}