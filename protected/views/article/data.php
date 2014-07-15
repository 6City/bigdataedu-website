<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>
<?php $this->beginContent('//layouts/main'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>

<div class="container">
      <div class="masthead">
        <h3 class="text-muted">数据超市</h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>/consultation">咨询</a></li>
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/buydata">买数据</a></li>
          <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/selldata">卖数据</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>数据驱动未来</h1>
        <p class="lead">数据工厂、数据超市、数据产品、数据标准、数据设计、UDL(统一数据语言)</p>
        <p><a role="button" href="#" class="btn btn-lg btn-success">即将上市</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>咨询</h2>
          <p class="text-danger">定制地数据需求</p>
          <p>金融数据、电商数据、用户行为数据、商品数据、信用数据、地理数据、天气数据......</p>
          <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/consultation" class="btn btn-primary">详情 »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>买数据</h2>
          <p>金融数据、电商数据、用户行为数据、商品数据、信用数据、地理数据、天气数据......联系我们</p>
          <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/buydata" class="btn btn-primary">详情 »</a></p>
       </div>
        <div class="col-lg-4">
          <h2>卖数据</h2>
          <p>金融数据、电商数据、用户行为数据、商品数据、信用数据、地理数据、天气数据......联系我们</p>
          <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/selldata" class="btn btn-primary">详情 »</a></p>
        </div>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>