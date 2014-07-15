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
【类型】大数据读书会
【费用】免费
【场地规模】200人
【主办方】互联网分析沙龙
【合办方】博文视点出版社
【时间】 2014年04月19日（星期六） 13:00-18:00
【地址】 北京-海淀区北四环西路68号中关村图书大厦5层多功能厅
【主题】 大嘴巴漫谈数据挖掘
【讲师介绍】
易向军：《大嘴巴漫谈数据挖掘》作者
【活动日程】
13:00-13:30 签到
13:30-13:40 主办方介绍：
13:40-15:00 分享:《大嘴巴漫谈数据挖掘》
1.产品精细化运营之道：在合适的时间，经由合适的地点，通过合适的方式（渠道），向合适的人，推荐合适的产品或服务。 
2.用户体验中的数据挖掘：从用户行为出发，结合用户特征和用户接触习惯，更全面地把握用户需求，围绕用户识别、用户细分、用户接触三个环节，建设全面、系统、高效的精细化运营支撑体系。 
3.足球球员综合评分模型 
15:00-15:30 提问&交流
15:30-15:50 抽奖环节
15:50-16:30 签售留影
【活动参与方式】
免费报名线下参与；
线上直播：报名后可免费在线参与（需申请）；
赞助参与：企业或个人赞助请联系聚会组织者，赞助内容包括：场地、书籍、饮料、红酒、小礼品、讲师宴请费用、讲师差旅费等，所有的赞助信息列表将会公布到社区的微博；
主题参与：与主办方沟通，申请参与分享，分享内容必须是干货，分享主题PPT需要提前3天发送给组织者；
志愿者参与：与主办方提前沟通，支持聚会场务事宜；
商务合作：与主办方洽谈；
        </pre>
         <a role="button" href="reg" class="btn btn-lg btn-primary">报名参加 »</a>
        </p>
         <a role="button" href="history?type=book" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>