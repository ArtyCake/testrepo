<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID),array('view','id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Surname')); ?>:</b>
	<?php echo CHtml::encode($data->Surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Group_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Group_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BirthYear')); ?>:</b>
	<?php echo CHtml::encode($data->BirthYear); ?>
	<br />


</div>