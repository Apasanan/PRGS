<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs = array (
		'Reservations' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List Reservation',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage Reservation',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<br><br>
<h1 style="color: #804000"><b>Select Restaurant Type</b></h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Buddhist', 'url'=>array('type/view&id=1')),
        array('label'=>'Muslim', 'url'=>array('type/view&id=5')),
    		
),
)); ?>


<div class="row-fluid">
        <div class="span6">
         
<h2 style="color: #2f97ff">
	<b>Fine Day</b>
</h2><div class="gridviewset">
	
6/9 �������� �.��Ҵ�˭� �.���� �.���ͧ����<br>
Tell.084-059-6969<br>
������·����  /  ��ҹ�Ѻ�͹��������ͧ��  /  ���ͧ  /  �Ѵ����§�繡����<br>
Mon.-Sun. 11:00-00:00<br>
Price:101 - 250 �ҷ
</div>
 </div><!--/span-->
        <div class="span6">
          <div id="content">

<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
        
          </div>
        </div><!--/span-->
      </div><!--/row-->
  
<br><br>  
<br><br>
     <div class="row-fluid">
        <div class="span4"> 
        
<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
 </div><!--/span-->
  <div class="span4"> 
        
<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
 </div><!--/span-->
 
  <div class="span4"> 
        
<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
 </div><!--/span-->

      </div><!--/row-->
      
      <br><br>  
<br><br>
     <div class="row-fluid">
        <div class="span4"> 
        
<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
 </div><!--/span-->
  <div class="span4"> 
        
<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
 </div><!--/span-->
 
  <div class="span4"> 
        
<img height='400px' width='600px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/Fineday.jpg'>
 </div><!--/span-->

      </div><!--/row-->
      
      
       

<!--<?php $this->renderPartial('_form', array('model'=>$model)); ?>-->

