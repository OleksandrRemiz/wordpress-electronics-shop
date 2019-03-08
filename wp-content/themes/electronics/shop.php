<?php
// Template Name: Shop
// phpinfo();
get_header();
?>

<style>
.product_in_shop{
	position: relative;
	float: left;
	width: 25%;
}
</style>
<?php
function show_categories($taxonomy, $parent, $marker){
	$categories = get_categories(array('taxonomy'=> $taxonomy,'type'=> 'product','child_of'=> 0,'parent'=> $parent,'orderby'=> 'name','order'=> 'ASC','hide_empty'=> 0,'hierarchical'=> true,'exclude'=> '','include'=> '','number'=> 0,'pad_counts'=> false));
	foreach ($categories as $category) {
		$term = get_term( $category->cat_ID, $taxonomy );
		echo "<p><input type='checkbox' name='" . $taxonomy . "' value='" . $term->slug . "'>" . $marker . $category->name . "</input></p>";
		show_categories($taxonomy, $category->cat_ID, '   ');
	}
}
$array_of_taxonomies_names = array(
	'electronics_types',
	'electronics_manufacturer',
	'electronics_color'
);
?>
<form id="ajax_filter_form">
	<?php
foreach ($array_of_taxonomies_names as $one_taxonomy) {
	show_categories($one_taxonomy, 0, '&nbsp&nbsp&nbsp');
	echo "</br>";
}
?>
<input type="button" id="ajax_product_filter_button" value="Фильтровать">
</form>
<div class="products_block">
	shsashfadha
</div>
<?php
// show_categories('electronics_types', 0, '-');

$categories = get_categories(array('taxonomy'=> 'electronics_types','type'=> 'product','child_of'=> '','parent'=> '','orderby'=> 'name','order'=> 'ASC','hide_empty'=> 0,'hierarchical'=> true,'exclude'=> '','include'=> '','number'=> 0,'pad_counts'=> false));
echo '<pre>';
// var_dump($categories);
echo '</pre></br>';
?>

<?php get_footer(); ?>


