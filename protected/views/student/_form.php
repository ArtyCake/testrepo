<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'student-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Поля с <span class="required">*</span> обязательны к заполнению.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'Surname',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'Name',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->labelEx($model,'Group_ID'); ?>
	<?php echo $form->dropDownList($model,'Group_ID',Group::All(),array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'BirthYear',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Сохранить',
		)); ?>
</div>

<?php $this->endWidget(); ?>
