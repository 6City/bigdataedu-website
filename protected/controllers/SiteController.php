<?php

class SiteController extends Controller
{
	public $defaultAction = "index";

	public function actionIndex() {
		$this->render('index');
	}

	public function actionEditor() {
		$model = new Article;
		$this->render('editor', array('model'=>$model));
	}
	
	public function actionEdit() {
		$model = new Event;
		$submits = $_POST['fv'];
		$content = $model->findAllBySql("select introduce from t_event where id='1'");
		$model->introduce = $content[0]['introduce'];
		if ($submits !== ''){
			$model->introduce = $_POST['introduce']; 
			$model->save();
		}
		$this->render('edit', array('model'=>$model));
	}
	
	public function actionHome() {
		$this->render('index');
	}
	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	
	
	public function actions(){
		// return array(
				// // captcha action renders the CAPTCHA image displayed on the contact page
				// 'captcha'=>array(
						// 'class'=>'CCaptchaAction',
						// 'backColor'=>0xFFFFFF,
						// 'maxLength'=>5,       // 最多生成几个字符
						// 'minLength'=>5,       // 最少生成几个字符
				// ),
				// // page action renders "static" pages stored under 'protected/views/site/pages'
				// // They can be accessed via: index.php?r=site/page&view=FileName
// // 				'page'=>array(
// // 						'class'=>'CViewAction',
// // 				),
		// );
	}
	
	public function actionService() {
		$this->render('service');
	}
	
	public function actionReg() {
		$model = new User;
		if (sizeof($_POST) === 0){
			$this->render('reg', array('model'=>$model,));
			Yii::app()->end();
		}
		if(isset($_POST['name']) && $_POST['name'] === ''
			|| isset($_POST['email']) && $_POST['email'] === ''
			|| isset($_POST['title']) && $_POST['title'] === ''
			|| isset($_POST['phone']) && $_POST['phone'] === ''
			|| isset($_POST['company']) && $_POST['company'] === ''
			|| isset($_POST['address']) && $_POST['address'] === ''
		){
			$this->render('failure', array('m'=>'姓名、邮箱、职位/学校、电话、公司、地址中某项为空,请重新输入'));
			Yii::app()->end();
		}
		$ce = new CEmailValidator;
		if(!$ce->validateValue($_POST['email'])){
			$this->render('failure', array('m'=>'邮箱输入错误,请重新输入'));
			Yii::app()->end();
		}
	
		$model->name = $_POST['name'];
		$model->email = $_POST['email'];
		$model->title = $_POST['title'];
		$model->phone = $_POST['phone'];
		$model->company = $_POST['company'];
		$model->address = $_POST['address'];
		$model->trade = $_POST['trade'];
		$model->QQ = $_POST['QQ'];
		$model->weixin = $_POST['weixin'];
		$model->weibo = $_POST['weibo'];
		$model->www = $_POST['www'];
		$model->demand = $_POST['demand'];
		$model->usertype = 'reg';
		if( $model->validate() ){
			$model->save();
			$this->render('success', array('m'=>'认证成功！'));
		}else{
			$this->render('failure', array('m'=>'认证失败！'));
		}
	}
	
	public function actionMain1() {
		$this->render('main1');
	}
}