<?php
$this->breadcrumbs=array(
	'Lessons'=>array('index'),
	$model->ID,
);

$this->menu=array(
array('label'=>'List Lesson','url'=>array('index')),
array('label'=>'Create Lesson','url'=>array('create')),
array('label'=>'Update Lesson','url'=>array('update','id'=>$model->ID)),
array('label'=>'Delete Lesson','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Lesson','url'=>array('admin')),
);
?>

<h1>View Lesson #<?php echo $model->ID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'ID',
		'Subject_ID',
		'Date',
		'Double_period',
		'Group_ID',
),
)); ?>
