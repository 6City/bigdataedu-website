<?php

class EventController extends Controller {
	
	public function actionHome() {
		$this->render('index');
	}
	
	public function actionTechnology() {
		$model = new Article;
		$model->type = '大数据技术聚会';
		$this->render('technology', array('model'=>$model));
	}
	
	public function actionSalon() {
		$model = new Event;
		$model->eventname = '大数据沙龙';
		$content = $model->find('isuse=:isuse',array(':isuse'=>1));
		$this->render('salon', array('model'=>$model, 'content'=>$content));
	}

	public function actionOpenclass() {
		$model = new Article;
		$model->type = '大数据公开课';
		$this->render('openclass', array('model'=>$model));
	}
	
	public function actionBook() {
		$model = new Article;
		$model->type = '大数据读书会';
		$this->render('book', array('model'=>$model));
	}
	
	public function actionTalk() {
		$model = new Article;
		$model->type = '大数据夜话';
		$this->render('talk', array('model'=>$model));
	}
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters() {
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions() {
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