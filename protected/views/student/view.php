<?php
$this->breadcrumbs=array(
	'Студенты'=>array('index'),
	$model->Surname.' ('.$model->group->Name.')',
);

$this->menu=array(
array('label'=>'Список студентов','url'=>array('index')),
array('label'=>'Добавить студента','url'=>array('create')),
array('label'=>'Изменить','url'=>array('update','id'=>$model->ID)),
array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Информация о <?php echo $model->Name.' '.$model->Surname; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'Surname',
		'Name',
		'Group_ID'=>array(
			'name'=>'Group_ID',
			'value'=>$model->group->Name,
		),
		'BirthYear',
),
)); ?>
