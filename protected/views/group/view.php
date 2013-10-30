<?php
$this->breadcrumbs=array(
	'Groups'=>array('index'),
	$model->Name,
);

$this->menu=array(
array('label'=>'List Group','url'=>array('index')),
array('label'=>'Create Group','url'=>array('create')),
array('label'=>'Update Group','url'=>array('update','id'=>$model->ID)),
array('label'=>'Delete Group','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Group','url'=>array('admin')),
);
?>

<h1>View Group #<?php echo $model->ID; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'ID',
		'Name',
		'Year',
),
)); ?>
