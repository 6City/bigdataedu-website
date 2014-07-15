<?php /* @var $this Controller */ 
$this->pageTitle = Yii::app()->name;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns:wb="http://open.weibo.com/wb"> <!--<![endif]-->
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="keywords" content="大数据" />
	    <meta name="description" content="大数据" />
	    <meta property="wb:webmaster" content="45fbfa4bf2bf2b5b" />
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/carousel.css" rel="stylesheet">
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/navbar-fixed-top.css" rel="stylesheet">
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/offcanvas.css" rel="stylesheet">
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/justified-nav.css" rel="stylesheet">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if IE 8]>
	      <script src="/js/respond.min.js"></script>
	    <![endif]-->
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
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.min.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-placeholder.js" type="text/javascript"></script>
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=93780036" type="text/javascript" charset="utf-8"></script>	
	</body>
</html>