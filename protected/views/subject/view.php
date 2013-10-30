<?php
$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	$model->Name,
);

$this->menu=array(
array('label'=>'Добавить предмет','url'=>array('create')),
array('label'=>'Изменить','url'=>array('update','id'=>$model->ID)),
array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Список предметов','url'=>array('index')),
);
?>

<h3><?php echo $model->Name; ?></h3>

    <div class="tabbable">
    <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Темы</a></li>
    <li><a href="#tab2" data-toggle="tab">Занятия</a></li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="tab1">
    <?php if($model->themeCount>=1): ?>

		<?php $this->renderPartial('_themes',array(
			'subject'=>$model,
			'themes'=>$model->themes,
		)); ?>
	<?php endif; ?>

	<h4>Добавить тему</h4>
		<?php $this->renderPartial('/themes/_form',array(
			'model'=>$theme,
		)); ?>
    </div>
    <div class="tab-pane" id="tab2">
    	<?php if($model->themeCount>=1): ?>

		<?php $this->renderPartial('_lessons',array(
			'subject'=>$model,
			'lessons'=>$model->lessons,
		)); ?>
	<?php endif; ?>

	<h4>Добавить тему</h4>
		<?php $this->renderPartial('/lesson/_form',array(
			'model'=>$lesson,
		)); ?>
    </div>
    </div>
    </div>