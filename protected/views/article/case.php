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
        <h1>音乐大数据V0.1</h1>
        <p class="lead">
        V0.1 : 完成<a href="http://www.last.fm" target="_blank">音乐</a>数据抓取，第一阶段10000首歌(可随机)；<br>
        	1.1、页面有一个输入框，可以输入10首歌内的歌曲名称；<br>
        	1.2、有一个“采集”按钮，点采集按钮，开始采集每首歌的全部字段；<br>
        	1.3、采集完成后，显示数据，并生成“下载数据”的链接，点击链接可以下载10首歌；<br>
        </p>
        <p>最佳使用PHP与<a href="http://www.yiiframework.com/doc/api/" target="_blank">Yii</a><br>
        	若效率高，不限定语言！ Hacker！Data Hacker！Hacking！Data Hacking！<br>
        	编写完成后发送至邮件：limingkai@bigdataedu.org <br>并注明需要的时间，若超过时间，则接社区项目失败；不符合要求也是社区项目失败！
         </p>
         	<font style="color:red">本<a href="http://bigdataedu.org" target="_blank">网站</a>代码将全部<a href="https://github.com/6City/bigdataedu-www.git" target="_blank">开源</a>，社区以后的各种项目将基于本站的框架，进行高效社区开发！
         		<hr>
         		注：PHP是网站代码，大数据项目、算法等不限定PHP，各种语言都可以！ 云孵化~
         	</font>
        <textarea rows="5" cols="5" name="music" class="form-control" placeholder="音乐列表，分号隔开"></textarea>
        <p><a role="button" href="<?php echo Yii::app()->request->baseUrl; ?>/collect" class="btn btn-lg btn-success">采集</a></p>
		</div>


<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>