<?php $this->beginContent('/layouts/main'); ?>

<?php 
// $this->widget('ext.wdueditor.WDueditor',array(
// 		'model' => $model,
// 		'attribute' => 'content',
// // 		'toolbars' =>array(
// // 			'FullScreen','Source','Undo', 'Redo','Bold'
// // 		),
// ));

$this->widget('ext.ueditor.UEditor',
            array(
                'id'=>'editor',
                'model'=>$model,
                'attribute'=>'content',
                'UEDITOR_CONFIG'=>array(
                    'UEDITOR_HOME_URL'=>Yii::app()->baseUrl.'/ueditor/',
                    'initialContent'=>'欢迎',
                    'imageUrl'=>Yii::app()->baseUrl.'/ueditor/php/imageUp.php',
                    'imagePath'=>Yii::app()->baseUrl.'/ueditor/php/',
                    'emotionLocalization'=>true,
                    'pageBreakTag'=>'[page]',
                    /**/
                    'toolbars'=>array(
                        array(
                            'fullscreen', 'source', '|', 'undo', 'redo', '|',
                        ),
                    ),
                    'labelMap'=>array(
                        'fullscreen'=>'全屏','source'=>'源代码','redo'=>'重做','undo'=>'撤销',
                    ),
                ),
            ));
?>
<?php $this->endContent(); ?>