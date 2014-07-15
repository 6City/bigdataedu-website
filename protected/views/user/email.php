<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php
$this->pageTitle = Yii::app()->name;
?>
<?php $this->beginContent('//layouts/email'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>

<div class="container">
	  <div class="alert alert-success text-right">
        <strong><?php echo $m;?></strong> 
</div>
<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>
