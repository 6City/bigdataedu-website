<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = '访问错误';

?>
<?php $this->beginContent('//layouts/main'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>
<div class="error">
	<?php 
	 	echo $this->pageTitle;
	 	//echo CHtml::encode($message); 
	 ?>
</div>
<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>