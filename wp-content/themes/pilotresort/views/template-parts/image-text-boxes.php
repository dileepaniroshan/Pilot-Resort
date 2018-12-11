<!-- image text content box   -->

<?php
$direction = get_sub_field('direction');
$image = get_sub_field('image');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?>

<?php if($direction == 'left') : ?>
<!-- image-text  -->
<section class="image-text-box container-fluid">
  <div class="row">
   <div class="col-md-8">
   	<div class="row" style="background-image: url('<?php echo $image['url']; ?>')"></div>
   </div>

   <div class="col-md-4  right-text">
   		<h2><?=$title?></h2>
   		<p><?=$paragraph?></p>
   		<a href="<?=$button_link?>" class="button"><?=$button_text?><i class="right-arrow"></i></a>
   </div>
 </div>
</section>

<?php endif ?>

<!-- text-image -->
<?php if($direction == 'right') : ?>
<section class="image-text-box container-fluid right">
  <div class="row">
   <div class="col-md-4  right-text">
   		<h2><?=$title?></h2>
   		<p><?=$paragraph?></p>
   		<a href="<?=$button_link?>" class="button"><?=$button_text?><i class="right-arrow"></i></a>
   </div>

   <div class="col-md-8">
   	<div class="row" style="background-image: url('<?php echo $image['url']; ?>')"></div>
   </div>

 </div>
</section>

<?php endif ?>
<!-- end of image text content box -->