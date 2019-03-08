<footer>
	FOOTER
<?php
?>
</footer>
<?php wp_footer(); ?>
</body>
<script type="text/javascript">

jQuery(function(){
	jQuery('#ajax_product_filter_button').click(function(){
		var array_of_checked_filters = [];
		$i = 0;
		jQuery('#ajax_filter_form p').each(function(i,elem) {
			// alert(elem.checked + ' ' + elem.value);
			if(elem.checked){
				array_of_checked_filters[i] = elem.value;
				i++;
			}
		});
		alert(array_of_checked_filters[0]);
		jQuery.ajax({
			url: '<?php echo admin_url("admin-ajax.php") ?>',
			type: 'POST',
			data: {
					action:'ajax_electronics_filter',
					array_of_checked_filters:array_of_checked_filters
				},
			success: function( data ) {
				jQuery('#ajax_product_filter_button').text('Отправить');
				jQuery(".products_block").html(data);
			}
		});
	});
});
</script>