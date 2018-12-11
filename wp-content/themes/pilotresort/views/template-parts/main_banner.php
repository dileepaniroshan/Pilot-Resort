
 <?php 
 $banner_type = get_field('banner_type');
 $main_banner = get_field('main_banner');
 $banner_image = $main_banner['banner_image'];
 $banner_header = $main_banner['banner_header'];

 $pop_up_box = get_field('pop_up_box','options');
 $upper_caption = $pop_up_box['upper_caption'];
 $header = $pop_up_box['header'];
 $description = $pop_up_box['description'];
 $button_text = $pop_up_box['button_text'];
 $button_link = $pop_up_box['button_link'];
 ?>

<?php if($banner_type == 'big') : ?>

<!-- main banner section  -->
<section class="main-banner" style="background-image: url('<?php echo $banner_image['url'] ?>');">


  
	<div class="banner-content">
	   <h1 class="banner-header"><?=$banner_header?></h1>
       <a class="scroll-down" href="#introduction">SCROLL DOWN FOR MORE <i class="down-arrow"></i></a>
       
       <div class="popup-box">
       	<i class="fas fa-times"></i>
           <p class="upper-caption"><?=$upper_caption?></p>
           <h3><?=$header?></h3>
           <p class="desc">
           	 <?=$description?>
           </p>

          
           <a href="<?=$button_link?>" class="button"><?=$button_text?></a>

       </div>

    </div>
</section>
<!-- end of main banner section  -->

<?php endif ?>
