<?php
$this->breadcrumbs=array(
	'Lessons',
);

$this->menu=array(
array('label'=>'Create Lesson','url'=>array('create')),
array('label'=>'Manage Lesson','url'=>array('admin')),
);
?>

<h1>Lessons</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
