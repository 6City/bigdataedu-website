<?php $this->beginContent('//layouts/main'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>
<?php $this->beginContent('//layouts/edit'); ?> <?php $this->endContent(); ?>

<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <form method="post" action="edit">
		<?php 
		$this->widget('ext.ueditor.UEditor',
				array(
						'id'=>'editor',
						'model'=>$model,
						'attribute'=>'introduce',
						'UEDITOR_CONFIG'=>array(
								'UEDITOR_HOME_URL'=>Yii::app()->baseUrl.'/ueditor/',
								//'initialContent'=>'欢迎',
								'imageUrl'=>Yii::app()->baseUrl.'/ueditor/php/imageUp.php',
								'imagePath'=>Yii::app()->baseUrl.'/ueditor/php/',
								'emotionLocalization'=>true,
								'pageBreakTag'=>'[page]',
								'minFrameHeight'=>280,
						),
		
				));
		?>
		<input type="hidden" name="fv" value="fv" />
		<input type="submit" value="保存" class="btn btn-lg btn-primary" />
		</form>
    </div>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>
