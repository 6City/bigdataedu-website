<?php /* @var $this Controller */ 
$this->pageTitle = Yii::app()->name;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/signin.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
	      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body>
 		
		<?php echo $content; ?>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.min.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-placeholder.js" type="text/javascript"></script>
	</body>
</html>