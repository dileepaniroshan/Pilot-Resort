<!DOCTYPE html>
<html class="push" <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <?php wp_head(); ?>
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body <?php body_class(); ?>>
     
     <!-- start of header -->

    <?php  $logo = get_field('logo','options') ?>

    <header>
      <div class="container-fluid">
          <div class="row">

                <div class="col-sm-4 header-menu">
                  <div class="menu-icon" onclick="openNav()">MENU</div>
                  <div class="language-selection">EN</div>
                  <span class="right-arrow"></span>
                </div>

                <div class="col-sm-4 logo">
                   <a href=""><img src="<?php echo $logo['url']; ?>"></a>
                </div>

                <div class="col-sm-4 contact-menu">
                 
                 <?php 
                     $button = get_field('button','options');
                     $button_text = $button['button_text'];
                     $button_link =  $button['button_link'];
                 ?>
                    <a href="<?=$button_link?>" class="button"><?=$button_text?></a>
                   
                   <ul>
                   <?php
                        // check if the repeater field has rows of data
                        if( have_rows('contact_menu','options') ):

                          // loop through the rows of data
                            while ( have_rows('contact_menu','options') ) : the_row();

                                // display a sub field value
                                $icon_class = get_sub_field('font_awesome_icon_class');
                                $icon_link = get_sub_field('link');
                                ?>
                                   <li><a href="<?=$icon_link?>"><i class="<?=$icon_class?>"></i></a></li>
                                <?php 

                            endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>
                  
                   </ul>    
               </div>
      </div>
    </header>
    <!-- end of header -->

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <?php wp_nav_menu( array( 
    'theme_location' => 'Primary Menu',
    'container_class' => 'overlay-content'
    ) ); 
    ?>

</div>

    

         