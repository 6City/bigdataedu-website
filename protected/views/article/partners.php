<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>
<?php $this->beginContent('//layouts/main'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>


<div class="container">
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>战略合作</h1>
        <p class="lead"></p>
        <a href="http://osforce.cn/" target="_blank"><img alt="开源力量" title="开源力量" src="<?php echo Yii::app()->request->baseUrl; ?>/images/osforce.png" /></a>
        <br>
        <b>合作口号：用#开源力量#打造全新的IT世界</b>
        <br><br>
      </div>
 	  <div class="jumbotron">
        <h1>合伙人合作</h1>
        <p class="lead"></p>
        <br><br>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>