<?php

	get_header();

	if ( have_posts() )
	{
		while ( have_posts() )
		{
			the_post();

			get_template_part('views/template-parts/main_banner');

			get_template_part('views/template_parts_loop');

		}
	}

	get_footer();

?>







 

 


 