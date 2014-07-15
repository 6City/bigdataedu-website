<?php

class UserController extends Controller
{
	public $defaultAction = "reg";

	public function actionIndex() {
		//$this->render('// post/index', array('model'=>null));
	}

	public function actionEmail() {
		$model = new User;
		if (sizeof($_POST) === 0){
			$this->render('email', array('model'=>$model,));
			Yii::app()->end();
		}
		if(isset($_POST['email']) && $_POST['email'] !== ''){
			$model->email = $_POST['email'];
			$model->name = '@';
			$model->title = '@';
			$model->phone = '@';
			$model->company = '@';
			$model->address = '@';
			$model->usertype = 'email';
			$ce = new CEmailValidator;
			if( $ce->validateValue($model->email) ){
				$model->save();
			}else {
				$this->render('email', array('m'=>'邮箱格式不正确，请重新输入！'));
				Yii::app()->end();
			}
			$this->render('email', array('m'=>'订阅成功！'));
		}else{
			$this->render('email', array('m'=>'订阅失败！'));
		}
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
	
	public function actionError(){
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
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
}