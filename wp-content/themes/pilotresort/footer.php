<?php $copyright = get_field('copyright_text','options') ?>

<footer>
    <!-- footer menu  -->
    <section class="footer-menu">
    	<i class="fas fa-arrow-up go-to-top"></i>
    	<div class="container">

            <?php wp_nav_menu( array( 
            'theme_location' => 'Primary Menu'
            ) ); 
            
            ?>
      </div>
    </section>
    <!-- end of footer menu -->

    <!-- patner logos -->
     <section class="partner-logos container">
           <ul>
                 <?php

                    // check if the repeater field has rows of data
                    if( have_rows('partner_logos','options') ):

                        // loop through the rows of data
                        while ( have_rows('partner_logos','options') ) : the_row();

                             $logo = get_sub_field('logo');
                             $link = get_sub_field('link');
                        ?>
                             <li><a href="<?=$link?>"><img src="<?=$logo['url']?>"></a></li>
                            
                     <?php
                        endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>

           	 </ul>
     </section>
    <!-- end of partner logos section  -->

    <section class="copyright container">
    	<p><?=$copyright?></p>
    </section>   
</footer>
<?php wp_footer(); ?>

</body>
</html>

