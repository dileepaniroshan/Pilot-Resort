<?php
	if (have_rows('flexible_layouts'))
	{
		while (have_rows('flexible_layouts'))
		{
			the_row();

			switch (get_row_layout())
			{
				case 'full_width_section':
					get_template_part('views/template-parts/full_width_section');
					break;

					case 'image-text-boxes':
					get_template_part('views/template-parts/image-text-boxes');
					break;

				default:
					echo "Unknown Layout";
					break;
			}
		}
	}
?>

