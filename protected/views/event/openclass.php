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
【类型】大数据公开课
【费用】免费
【主办方】开源力量
【合办方】bigdataedu
【时间】 2014-03-18 20:00 ~ 2014-03-18 22:00
【地址】 报名后邮件 或 微信 通知
【主题】 数据挖掘入门指引
【微博】@bigdataedu 
【微信】bigdataedu 
【网站】bigdataedu.org
【课程背景】
大数据的核心是价值，如何挖掘数据价值，应用是引导，挖掘是关键。数据挖掘是交叉学科，统计学和机器学习是其中最重要的基础。大数据处理不是数据分析，数据分析是什么，数据分析和数据挖掘的区别，数据挖掘的流程、重要环节和主要算法，大数据挖掘和传统数据挖掘的区别，课程会给出一个清晰的认识。
【课程大纲】
1. 入门
2. 数据分析流程
3. 数据分析能力层次
4. 数据挖掘概念流程
5. 分类
6. 聚类
7. 预测
8. 关联
9 数据挖掘工具
10. 大数据挖掘
【讲师介绍】
曾立平，有8年数据挖掘工作经验，擅长数据分析/挖掘，亚联数据挖掘专家。他曾主持和指导多个省份电信数据挖掘项目的开发，在数据挖掘实战方面有很丰富的经验。
【活动参与方式】
线上直播：报名后可免费在线参与（需申请）；
商务合作：与主办方洽谈；
【报名方式】
方式1、发送 单位+姓名+职务+电话+邮件 发送至邮箱：limingkai@bigdataedu.org
方式2、填写认证 bigdataedu.org/reg/
方式3、编辑 单位+姓名+职务+电话+邮件 发送至微信号：bigdataedu
【联系人】
铭锴 13520809508 微信 mingkai606
        </pre>
         <a role="button" href="reg" class="btn btn-lg btn-primary">报名参加 »</a>
        </p>
         <a role="button" href="history?type=openclass" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>