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
【类型】大数据技术聚会
【费用】半公益性（30人技术人员免费，30人非技术人员收费100元）
【场地规模】60人
【主办方】bigdataedu
【协办方】合会馆
【时间】2014年3月15日 13:00 ~ 17:30
【地址】北京市朝阳区建外SOHO西区15号楼27层
【主题】大数据时代之新技术、新视角
【微博】@bigdataedu
【微信】bigdataedu
【网站】bigdataedu.org
【活动介绍】
2014年2月20日社交公司facebook 190亿美金收购了手机信息公司whatsapp，这将给移动开发者们带来无限的想象空间。在国内，也有庞大的腾讯公司，我们能不能也创造一个奇迹呢？让我们拭目以待吧~这次活动我们将揭秘facebook的大数据利器Presto：
新技术之一：
数据查询引擎，可对250PB以上的数据进行快速地交互式分析。该项目始于 2012 年秋季开始开发，目前该项目已经在超过 1000 名 Facebook 雇员中使用，运行超过 30000 个查询，每日数据在 1PB 级别。Facebook 称 Presto 的性能比诸如 Hive 和 Map*Reduce 要好上 10 倍有多。
Presto 当前支持 ANSI SQL 的大多数特效，包括联合查询、左右联接、子查询以及一些聚合和计算函数；支持近似截然不同的计数(DISTINCT COUNT)等。
深入这家千亿级的公司大数据平台的技术架构~
新技术之二：
开源监控系统OpenTSDB，用hbase存储所有的时序（无须采样）来构建一个分布式、可伸缩的时间序列数据库。它支持秒级数据采集所有metrics，支持永久存储，可以做容量规划，并很容易的接入到现有的报警系统里。OpenTSDB可以从大规模的集群（包括集群中的网络设备、操作系统、应用程序）中获取相应的metrics并进行存储、索引以及服务，从而使得这些数据更容易让人理解，如web化，图形化等。
对于运维工程师而言，OpenTSDB可以获取基础设施和服务的实时状态信息，展示集群的各种软硬件错误，性能变化以及性能瓶颈。对于管理者而言，OpenTSDB可以衡量系统的SLA，理解复杂系统间的相互作用，展示资源消耗情况。集群的整体作业情况，可以用以辅助预算和集群资源协调。对于开发者而言，OpenTSDB可以展示集群的主要性能瓶颈，经常出现的错误，从而可以着力重点解决重要问题。
新视角之一：
数据是大数据时代的宝藏，大数据公益大学在2014年2月22日在thoughtworks举办了中国第一次opendataday，这将开启中国的大数据时代~
数据的价值不言而喻，大数据公益大学一直推崇进入大数据的正确路线是：知识分享-解决方案-关联模式-大数据。相信这一次的知识分享，能促进大数据行业的发展~
大数据的开发者们、管理员们、分析师们、咨询师们~ 让我们一起参与到大数据时代中吧~
By the way，大数据公益大学正在招生：大数据分析师班、数据众筹班感兴趣的同学们，关注微信：bigdataedu，及时了解最新信息吧~
【活动日程】
13:00-13:55 会议签到、短视频播放
13:55-13:58 主持人介绍
13:58-14:00 协办方代表发言
14:00-14:30 大数据新视角之：大数据时代的新战略 嘉宾：赛智时代总经理 赵刚博士
14:30-14:50 现场问答
14:50-15:00 自由讨论、广告时间（赞助商现场做广告）
15:00-15:30 大数据新技术之：OpenTSDB 嘉宾：高德 刘刚
15:30-15:50 现场问答
15:50-16:00 自由讨论、广告时间（赞助商现场做广告）
16:00-16:30 大数据新技术之：Presto 嘉宾：中移动 邓展成
16:30-16:50 现场问答
16:50-17:00 自由讨论、广告时间（赞助商现场做广告）
17:00-17:30 连线加拿大徐理回答大数据、Hadoop相关问题  
【讲师介绍】
赵刚
博士，现任北京赛智时代信息技术咨询有限公司总经理，大数据专家。曾任工信部赛迪研究院“赛迪学者”，赛迪顾问公司高级副总裁，赛迪时代公司总裁，兼任中国信息化推进联盟专家，中国电子学会高级会员。长期从事新一代信息技术战略和应用的研究和咨询，为超过100家政府和企业客户提供了业务战略、信息化和互联网的专业咨询服务，著有专著《大数据：技术和应用实践指南》、《IT管理体系：战略、管理和服务》，近期主持完成了“2013－2014年中国十大行业大数据应用研究课题”。
刘刚
毕业于大连理工大学，资深Hadoop技术专家，对HDFS、MapReduce、HBase、Hive、Mahout、Storm、spark和openTSDB等Hadoop生态系统中的技术有比较深入的研究，在Hadoop开发和运维方面积累了丰富的经验。开源框架EasyHDFSWeb和EasyHDFSControl的作者。在我国Hadoop技术圈内非常活跃，经常在各种会议和沙龙上做技术分享，深受欢迎。曾就职于国内最大CDN厂商蓝汛，担任Hadoop高级工程师，现就职于高德软件。在北京大学软件所负责“核高基”的8-6课题，以及高性能企业级应用服务器的开发(PKUAS2010)，《Hadoop应用开发技术详解》的作者。
邓展成
毕业于华中科技大学。曾在人人网工作近3年，一直负责Hadoop相关生态系统的研发和运维。深入研究过Hadoop, HBase, SQOOP, Hive, Impala，Mahout等相关大数据开源产品。在海量数据处理方案及性能调优上有着丰富的经验。
【活动参与方式】
线下参与：免费参与；
线上直播：dian.fm/id/bigdataedu（需申请）
赞助参与：企业或个人赞助请联系主办方，赞助内容包括：场地、书籍、饮料、红酒、小礼品、讲师宴请费用、讲师差旅费等，所有的赞助信息列表将会公布到@bigdataedu 微博；
主题参与：与主办方沟通，申请参与分享，分享内容必须是干货，分享主题PPT需要提前3天发送给主办方；
志愿者参与：与主办方提前沟通，支持场务等事宜；
商务合作：与主办方洽谈；
【报名方式】
方式1、发送 单位+姓名+职务+电话+邮件 发送至邮箱：limingkai@bigdataedu.org
方式2、填写认证 bigdataedu.org/reg/
方式3、编辑 单位+姓名+职务+电话+邮件 发送至微信号：bigdataedu
方式4、微博报名 event.weibo.com/21380030/
方式5、豆瓣报名 douban.com/event/21032946/ 
【联系人】
铭锴 13520809508 微信 mingkai606
    </pre>     
        <a role="button" href="reg" class="btn btn-lg btn-primary">报名参加 »</a>
        </p>
        <a role="button" href="history?type=technology" class="btn btn-lg btn-primary">往届回顾 »</a>
      </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>