<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>
<?php $this->beginContent('//layouts/main'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>

<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <h1><?php //echo $model->eventname;?></h1>
      <pre>
<?php echo $content->introduce; ?>
	  </pre>
         <a role="button" href="reg" class="btn btn-lg btn-primary">报名参加 »</a>
         </p>
         <a role="button" href="history?type=salon" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>