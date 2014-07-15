<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php
$this->pageTitle = Yii::app()->name;
?>
<?php $this->beginContent('//layouts/reg'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>

<div class="container">
	<form class="form-signin" role="form" action="reg" method="post">
        <h2 class="form-signin-heading">认证</h2>
        <input type="text" name="name" class="form-control" placeholder="姓名(必填)" required autofocus>
        <input type="text" name="email" class="form-control" placeholder="邮箱(必填)" required>
		<input type="text" name="title" class="form-control" placeholder="职位/学校专业或院系(必填)" required>
        <input type="text" name="phone" class="form-control" placeholder="电话(必填)" required>
        <input type="text" name="company" class="form-control" placeholder="公司名/学校(必填)" required>
        <input type="text" name="address" class="form-control" placeholder="通信地址(必填)" required>
        <input type="text" name="trade" class="form-control" placeholder="行业" required>
		<input type="text" name="QQ" class="form-control" placeholder="QQ" >
        <input type="text" name="weixin" class="form-control" placeholder="微信" >
        <input type="text" name="weibo" class="form-control" placeholder="微博" >
        <input type="text" name="www" class="form-control" placeholder="个人/公司网站" >
        <textarea rows="2" name="demand"  class="form-control" placeholder="备注/提建议/相关简介/各种需求/各种供应/......"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >报名认证</button>
	</form>
<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>