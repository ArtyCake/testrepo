<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'ID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'Subject_ID',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'Date',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'Double_period',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'Group_ID',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
