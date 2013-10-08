<?php echo $title;?>
<hr>
<?php $this->widget('zii.widgets.CMenu',array(
	'items'=>array(
array('label'=>'Home', 'url'=>array('category/index')),
array("label"=>"show","url"=>array("category/show")),
),
	));
?>


<?php echo Yii::app()->cache->get("hello");?>
