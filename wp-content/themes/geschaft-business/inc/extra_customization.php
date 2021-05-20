<?php 

	$geschaft_business_sticky_header = get_theme_mod('geschaft_business_sticky_header');

	$geschaft_business_custom_style= "";

	if($geschaft_business_sticky_header != true){

		$geschaft_business_custom_style .='.wrap_figure.fixed{';

			$geschaft_business_custom_style .='position: static;';
			
		$geschaft_business_custom_style .='}';
	}