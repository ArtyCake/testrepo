<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID),array('view','id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subject_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Subject_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::encode($data->Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Double_period')); ?>:</b>
	<?php echo CHtml::encode($data->Double_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Group_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Group_ID); ?>
	<br />


</div>