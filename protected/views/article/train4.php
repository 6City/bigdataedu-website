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
        <h1><?php //echo $model->type;?></h1>
        <pre>
【状态】暂缓
【类型】大数据会员班
【费用】免费
【人数】30人
【主办方】bigdataedu
【合办方】暂略
【时间】 暂略
【地址】 暂略
【微博】暂略
【微信】暂略
【网站】暂略
【课程背景】
暂略
【课程大纲】
暂略
【讲师介绍】
暂略
【报名方式】
方式1、发送 单位+姓名+职务+电话+邮件 发送至邮箱：limingkai@bigdataedu.org
方式2、填写认证 bigdataedu.org/reg
方式3、编辑 单位+姓名+职务+电话+邮件 发送至微信号：bigdataedu
【联系人】
铭锴 13520809508 微信 mingkai606
        </pre>
         <a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/reg" class="btn btn-lg btn-primary">报名参加 »</a>
        </p>
         <a role="button" href="history?type=train4" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>