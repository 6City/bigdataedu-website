<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>
<?php $this->beginContent('//layouts/train'); ?>
<?php $this->beginContent('//layouts/header'); ?> <?php $this->endContent(); ?>

 <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron">
            <h1>大数据培训</h1>
                        学习路线：
			<br>大数据速成班->大数据正式班->大数据会员班（企业班）
			<br>大数据预备班->大数据正式班->大数据会员班（学校班）
			<p><a class="btn btn-lg btn-success" href="reg" role="button">报名学习</a></p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>速成班</h2>
              	<p>经过1~4天学习，迅速掌握大数据知识，进行实践。
              	 适应人群：上班族，有基础的同学们。</p>
              <p><a class="btn btn-default" href="train1" role="button">查看详情 &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>预备班</h2>
              	<p>经过30天的移动互联网学习，掌握大数据理论知识。
              	适应人群：以学生、爱好者为主。</p>
              <p><a class="btn btn-default" href="train2" role="button">查看详情 &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>正式班</h2>
              	<p>90天'封闭式'全方面学习大数据知识。
              	 适应人群：公司高管、学校老师、研究生等。</p>
              <p><a class="btn btn-default" href="train3" role="button">查看详情 &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>会员班</h2>
              	<p>800天'半封闭式'学习，系统学习大数据知识。
              	适应人群：以大数据为职业，长期学习。</p>
              <p><a class="btn btn-default" href="train4" role="button">查看详情 &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item">2014年3月22日 ~ 23日速成班开班</a>
            <a href="#" class="list-group-item">2014年6月25日预备班开班(暂定)</a>
            <a href="#" class="list-group-item active">
            	 &nbsp;联 系：李老师<br> &nbsp;电 话：13520809508<br> &nbsp;微 博：@bigdataedu<br> &nbsp;微 信：mingkai606<br>&nbsp;QQ群：246972879 <br>&nbsp;limingkai@bigdataedu.org
            </a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

<?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
<?php $this->endContent(); ?>