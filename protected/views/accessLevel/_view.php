<?php
/* @var $this AccessLevelController */
/* @var $data AccessLevel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->_id), array('view', 'id'=>$data->_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_version')); ?>:</b>
	<?php echo CHtml::encode($data->_version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_levelName')); ?>:</b>
	<?php echo CHtml::encode($data->_levelName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_dateTimeInserted')); ?>:</b>
	<?php echo CHtml::encode($data->_dateTimeInserted); ?>
	<br />


</div>