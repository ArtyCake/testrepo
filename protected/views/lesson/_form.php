<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'lesson-form',
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Поля с <span class="required">*</span> обязательны к заполнению.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx($model,'Date'); ?>
	<?php echo $form->dropDownList($model,'Date',
	array(
		1=>'Понедельник',2=>'Вторник',3=>'Среда',4=>'Четверг',5=>'Пятница',6=>'Суббота',
		),
	array('class'=>'span5')); ?>

	<?php echo $form->labelEx($model,'Double_period'); ?>
	<?php echo $form->dropDownList($model,'Double_period',
	array(
		1=>'Первая',2=>'Вторая',3=>'Третья',4=>'Четвертая',5=>'Пятая',6=>'Шестая',
		),
	array('class'=>'span5')); ?>

	<?php echo $form->labelEx($model,'Group_ID'); ?>
	<?php echo $form->dropDownList($model,'Group_ID',Group::All(),array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Добавить',
		)); ?>
</div>

<?php $this->endWidget(); ?>
