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
        <h1>讲师入驻</h1>
        <p class="lead">
        1、交纳学员学习质量保证金5000元；保证金在讲师解除合同后返还，需提前30个工作日；(不提供发票)<br>
        2、讲师每周5小时学员在线答疑；<br>
        3、在微博、微信进行讲师推荐；<br>
        </p>
        <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/reg" class="btn btn-lg btn-success">入驻</a></p>
      </div>


<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>