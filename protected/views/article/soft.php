<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>
<?php $this->beginContent('//layouts/main'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>

<div class="container">

      <div class="masthead">
        <h3 class="text-muted">软件超市</h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>/consultation">咨询</a></li>
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/opensoft">开源软件</a></li>
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/bsoft">商业软件</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>软件定义世界</h1>
        <p class="lead">开源软件、商业软件、自由软件、应用软件</p>
        <!-- <p><a role="button" href="#" class="btn btn-lg btn-success">详情</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>咨询</h2>
          <p class="text-danger">定制地软件需求</p>
          <p></p>
          <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/consultation" class="btn btn-primary">详情 »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>开源软件</h2>
          <p>金融软件、电商软件、地理软件、天气软件......联系我们</p>
          <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/opensoft" class="btn btn-primary">详情 »</a></p>
       </div>
        <div class="col-lg-4">
          <h2>商业软件</h2>
          <p>金融软件、电商软件、地理软件、天气软件......联系我们</p>
          <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/bsoft" class="btn btn-primary">详情 »</a></p>
        </div>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>