<?php
Class Theme_electronics{
	public $menus_array = array(
		'header_menu' => 'Меню в хедере',
		'footer_menu' => 'Меню в футере'
	);
	function index(){
		add_theme_support('post-thumbnails');
		register_nav_menus($this->menus_array);
	}
}
?>