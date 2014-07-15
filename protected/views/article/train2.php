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
【状态】招生中(诚邀渠道，详情联系mingkai)
【类型】大数据预备班
【费用】200元(5次微课，每次2个小时左右，每次收费48元，如果5次一起报名，可优惠至200元)
【人数】不限(报名人数不足50人，时间将适当延期，具体时间以一周为单位)
【主办方】bigdataedu
【合办方】dazui8
【时间】 2014年6月25日(预定)
【微博】@bigdataedu
【微信】bigdataedu
【网站】bigdataedu.org
【课程背景】
什么是学习？
学习是提高技能，为公司带来利润、为社会创造价值、为家庭履行责任！
一本书 + 一位老师 + 一个社区 + N位志愿辅导员 = bigdataedu开启移动互联网时代3+N模式学习方案！
问：书是谁的？
答：易向军老师的。
问：社区是谁的？
答：全体学习者们、老师们的！
问：谁是辅导员？
答：热心的社区参与者，未来的老师！
良好的学习环境、靠谱的学习方法、还有同学一起进行社会化学习，学什么还会难呢？
bigdataedu将针对数据挖掘初学者开预备班，老师是《大嘴巴漫谈数据挖掘》作者易向军老师，首次采用移动互联网学习方式，帮助初学者们数据挖掘基础知识学习、职业规划等。
采用微课程方式，5次微课，1课时120分钟，每次2个小时左右，每次收费48元，如果5次一起报名，可优惠至200元，个性化学习最佳方案。
微课每周至少举办两次，报名的微课可以在循环期间根据自己的时间有两次听课机会。（就是一个学员报了某一次微课，可以听两次）
屌丝价，高大上的学习，这是要逆袭数据挖掘啊~同学们~还等什么呢？抓紧学习吧~
【讲师介绍】
易向军，北京科技大学计算机硕士学历，长期工作于互联网和电信领域，目前创办dazui8.com，致力于数据挖掘知识的宣传推广以及相关技术的研发探索。
【课程介绍】
大嘴巴漫谈数据挖掘微课大纲
针对学员：入门初学
授课模式：在线教育
微课大纲：
微课1：数据挖掘概述（2小时左右）
1.1数据挖掘简介
1.2 数据挖掘应用
微课2：基本概率知识（2小时左右）
2.1概率定义
2.2随机变量
2.3数字特征
2.4参数估计
2.5假设检验
微课3：数据挖掘常用算法-1（2小时左右）
3.1关联规则
3.2决策树
3.3贝叶斯
3.4聚类分析
微课4：数据挖掘常用算法-2（2小时左右）
4.1神经网络
4.2线性回归
4.3逻辑回归
4.4因子分析
4.5信度分析
4.6效度分析
微课5：数据挖掘案例（2小时左右）
5.1产品精细化运营之道
5.2用户体验中的数据挖掘
5.3足球球员综合评分模型
【报名方式】
填写认证 bigdataedu.org/reg，注明：报名大数据预备班（数据挖掘）
【联系人】
铭锴 13520809508 微信 mingkai606
        </pre>
         <a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/reg" class="btn btn-lg btn-primary">报名参加 »</a>
        </p>
         <a role="button" href="history?type=train2" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>