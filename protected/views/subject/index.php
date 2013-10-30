<?php
$this->breadcrumbs=array(
	'Предметы'=>array('index'),
	'Список предметов',
);

$this->menu=array(
array('label'=>'Создать предмет','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('subject-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Список предметов</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'subject-grid',
'dataProvider'=>$model->search($model->Lector_ID = Yii::app()->user->id),
'filter'=>$model,
'columns'=>array(
		'Name',
		'Lector_ID' => array(
			'name' => 'Lector_ID',
			'value' => '$data->lector->surname',
			'filter' => false,
		),
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
