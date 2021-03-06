<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/form.css' )
?>
<!DOCTYPE html>
<html lang="th">

<head>
<meta charset="utf-8">
<meta name="language" content="th" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<style type="text/css">
  body {
	padding-top: 60px;
	padding-bottom: 40px;
  }
  .sidebar-nav {
	padding: 9px 0;
  }

	@media (max-width: 980px) {
		body{
			padding-top: 0px;
		}
	}
	h1,h2{color:#FFD700;}
	
</style>

<!-- Le fav and touch icons -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo Yii::app()->homeURL; ?>">   <img src="images/logo.jpg"  width="198" height="60"></a>
				<div class="nav-collapse">
				<br>
				<?php

				if(Yii::app()->user->isGuest){
				 $this->widget('zii.widgets.CMenu',array(
				 		
				 		'encodeLabel' => false,
				 		'htmlOptions' => array(
				 				'class'=>'nav pull-right',
				 		),
				 		'submenuHtmlOptions' => array(
				 				'class' => 'dropdown-menu',
				 		),
				 		
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'=> 'active',
						'items'=>array(
			
						array('label'=>'หน้าแรก', 'url'=>array('/site/index')),
						//array('label'=>'reservation', 'url'=>array('/reservation/index'),),

								/*array(
										'label' => 'reservation',
										'url' => '#',
										'linkOptions'=> array(
												'class' => 'dropdown-toggle',
												'data-toggle' => 'dropdown',
										),
										'itemOptions' => array('class'=>'dropdown user'),
										'items' => array(
												array(
														'label' => 'ไทย-พุทธ',
														'url' =>array('/type/view', 'id'=>'1')
												),
								
												array(
														'label' => '',
														array(
																'class' => 'divider',
														)
												),
												array(
														'label' => 'ไทย-มุสลิม',
														'url' => array('type/view','id'=>'2'),
												),
										)
								),*/
								
						//array('label'=>'menu', 'url'=>array('/type/view','id'=>'1')),
							array(
								 'label' => 'แนะนำร้าน',
								 'url' => '#',
								 'linkOptions'=> array(
								 'class' => 'dropdown-toggle',
								 'data-toggle' => 'dropdown',
								 ),
								 'itemOptions' => array('class'=>'dropdown user'),
								 'items' => array(
								 array(
								 'label' => 'ไทย-พุทธ',
								 'url' =>array('/type/view', 'id'=>'1')
								 ),
								
								 array(
								 'label' => '',
								 array(
								 'class' => 'divider',
								 )
								 ),
								 array(
								 'label' => 'ไทย-มุสลิม',
								 'url' => array('type/view','id'=>'3'),
								 ),
								 )
								),
						//array('label'=>'Reservation Status', 'url'=>array('/reservation/status')),
						array('label'=>'รีวิวร้านอาหาร', 'url'=>array('/review/index')),
						array('label'=>'เข้าสู่ระบบ', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'ออกจากระบบ ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'ลงทะเบียน', 'url'=>array('/site/singup'), 'visible'=>Yii::app()->user->isGuest)
						
								
								)
								));
								
								}
								?>
								
								
				<!--  <div class="brand"> <img src="images/fb.png"  width="71" height="22"></div>-->
				
				<div class="search">
							<!--	<form method="get" action="/search/">
								<div class="keyword">
								<input name="q" value="ค้นหา..." style="color: #999999">
								
								<a href="#" title="search" class="global-search"></a>
								</div>
								</form> 
								-->
								
								
								  <form class="navbar-form navbar-left" action="/search/">
								  <div class="keyword">
								  <input type="text" class="form-control" placeholder="ค้นหา...">
								  
								  </div>
								  </form>
								</div>
							
		<?php if(!Yii::app()->user->isGuest): ?>
					
						<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
				
						array('label'=>'ผู้ใช้ระบบ', 'url'=>array('/User/admin'),'visible'=>Yii::app()->user->isAdmin(),),
						//array('label'=>'reservation ', 'url'=>array('/reservation/admin'),),
						//array('label'=>'Management Type Menu', 'url'=>array('/type/admin'),),
						array('label'=>'จัดการร้าน', 'url'=>array('/menu/admin'),),
						//array('label'=>'Management Best Seller', 'url'=>array('/bestSeller/admin'),),
			
						//array('label'=>'Management Promotion', 'url'=>array('/promotion/admin'),),
						array('label'=>'จัดการรีวิว', 'url'=>array('/review/admin'),),
	
						array('label'=>'เข้าสู่ระบบ', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'ออกจากระบบ ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					
						),
					)); ?>
					
					<?php endif; ?>
						
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

    <div class="container-fluid">
     <div class="span2">
      
    <div class="span10">
      <?php echo $content ?>

    
</div></div> </div><!--/.fluid-container-->
 <hr>
      <footer>
        <p><center>&copy;AROY-DEE PHUKET <br> By Phuket Restaurant Guide System Team</center></p>
      </footer>

    
</body>
</html>
