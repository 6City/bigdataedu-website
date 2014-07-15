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
【状态】已结束
【类型】大数据夜话(聚餐)
【费用】AA
【人数】10~20人
【主办方】bigdataedu
【时间】 2014年4月30日 19:30 ~ 21:30
【地址】 报名审核后通知
【主题】 大数据时代：数据产品经理的崛起
【微博】@bigdataedu
【微信】bigdataedu
【网站】bigdataedu.org
【夜话日程】
假期一起聚餐、八卦数据产品经理的学习、职责、培训、行业合作等；
【参与方式】
线上直播：报名后可免费在线参与（需申请，每人收费10元，哈哈~）；
赞助参与：欢迎投资人、土豪赞助；
【报名方式】
发送 单位+姓名+职务+电话+邮件 发送至邮箱：limingkai@bigdataedu.org
【联系人】
mingkai
【联系方式】 
电话 13520809508 
微信 mingkai606
        </pre>
         <a role="button" href="reg" class="btn btn-lg btn-primary">报名参加 »</a>
         </p>
         <a role="button" href="history?type=talk" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>