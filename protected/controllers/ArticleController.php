<?php

class ArticleController extends Controller {
	public function actionTrain1() {
		$model = new Article;
		$this->render('train1', array('model'=>$model));
	}
	
	public function actionTrain2() {
		$model = new Article;
		$this->render('train2', array('model'=>$model));
	}
	
	public function actionTrain3() {
		$model = new Article;
		$this->render('train3', array('model'=>$model));
	}
	
	public function actionTrain4() {
		$model = new Article;
		$this->render('train4', array('model'=>$model));
	}

	public function actionBuyData() {
		$this->render('buydata');
	}
	
	public function actionSellData() {
		$this->render('selldata');
	}

	public function actionConsultation() {
		$this->render('consultation');
	}
	
	public function actionoSoft() {
		$this->render('osoft');
	}
	
	public function actionbSoft() {
		$this->render('bsoft');
	}
	
	public function actionBbs() {
		$this->render('bbs');
	}
	
	public function actionPartners() {
		$this->render('partners');
	}
	
	public function actionTeacher() {
		$this->render('teacher');
	}
	
	public function actionCase() {
		$this->render('case');
	}
	
	public function actionCollect() {
		$this->render('collect');
	}
	
	public function actionHome() {
		$this->render('site/index');
	}
	
	public function actionCommunity() {
		$this->render('community');
	}
	
	public function actionTrain() {
		$this->render('train');
	}
	
	public function actionData() {
		$this->render('data');
	}
	
	public function actionSoft() {
		$this->render('soft');
	}
	
	public function actionHistory() {
		$model = new Article;
		if(isset($_GET['type'])){
			switch ($_GET['type']){
				case 'technology': 
					$model->type = '技术聚会'; 
					$m = 'event';
					break;
				case 'salon': 
					$model->type = '沙龙';
					$m = 'event';
					break;
				case 'openclass': 
					$model->type = '公开课';
					$m = 'event';
					break;
				case 'book': 
					$model->type = '读书会';
					$m = 'event';
					break;
				case 'talk': 
					$model->type = '夜话';
					$m = 'event';
					break;
				case 'train1': 
					$model->type = '速成班';
					$m = 'train';
					break;
				case 'train2': 
					$model->type = '预备班';
					$m = 'train';
					break;
				case 'train3': 
					$model->type = '正式班';
					$m = 'train';
					break;
				case 'train4': 
					$model->type = '会员班';
					$m = 'train';
					break;
				default: ;
					break;
			}
		}
		$this->render('history', array('model'=>$model, 'm'=> $m));
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
}