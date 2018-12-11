<!-- full width section -->
<?php
  $title = get_sub_field('title');
  $description = get_sub_field('description');
  $button_text = get_sub_field('button_text');
  $button_link = get_sub_field('button_link');
?>

<section class="full-width" id="introduction">
   <div class="container">
     <h2><?=$title?></h2>
     <p><?=$description?></p>

   <a href="<?=$button_link?>" class="button"><?=$button_text?></a> 
   </div>
</section>
<!-- end of full width section  -->