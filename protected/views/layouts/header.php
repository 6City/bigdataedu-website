<div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><?php echo Yii::app()->name; ?></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo Yii::app()->request->baseUrl?>/home">首页</a></li>
                <li class="dropdown">
                  <a href="<?php echo Yii::app()->request->baseUrl?>/event" class="dropdown-toggle" data-toggle="dropdown">活动 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/technology">技术聚会</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/salon">沙龙</a></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/openclass">公开课</a></li>                    
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/book">读书会</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/talk">夜话</a></li>
                    </ul>
                </li>
                <!----> <li class="dropdown">
                  <a href="<?php echo Yii::app()->request->baseUrl?>/community" class="dropdown-toggle" data-toggle="dropdown">社区 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/partners">合作</a></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/case">社区项目</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<?php echo Yii::app()->request->baseUrl?>/train" class="dropdown-toggle" data-toggle="dropdown">培训 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/train1">速成班</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/train2">预备班</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/train3">正式班</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/train4">会员班</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<?php echo Yii::app()->request->baseUrl?>/data" class="dropdown-toggle" data-toggle="dropdown">数据超市 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/buydata">买数据</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/selldata">卖数据</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/consultation">咨询</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<?php echo Yii::app()->request->baseUrl?>/soft" class="dropdown-toggle" data-toggle="dropdown">软件超市 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/osoft">开源软件</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/bsoft">商业软件</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/consultation">咨询</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-right" role="form" action="<?php echo Yii::app()->request->baseUrl; ?>/email" method="post">
	            <div class="form-group">
	               <input type="text" placeholder="邮箱" name="email" size="16" class="form-control">
	            </div>
	               <button type="submit" class="btn btn-success">订阅</button>
	          	   <a class="btn btn-lg btn-primary" href="<?php echo Yii::app()->request->baseUrl; ?>/reg" role="button">认证</a>
	          </form>
           </div>
        </div>
     </div>
   </div>
</div>
