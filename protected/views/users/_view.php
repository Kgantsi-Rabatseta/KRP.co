<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

<table>
	<thead>
		<tr>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_id')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_version')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_userName')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_emailAddress')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_name')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_surname')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_accessLevel_id')); ?></th>
			<th><?php echo CHtml::encode($data->getAttributeLabel('_dateTimeInserted')); ?></th>
			<th></th>
		</tr>
		
	</thead>
	<tfoot></tfoot>
	<tbody>
			<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->_id), array('view', 'id'=>$data->_id)); ?></td>
	<td><?php echo CHtml::encode($data->_version); ?></td>
	<td><?php echo CHtml::encode($data->_userName); ?></td>
	<td><?php echo CHtml::encode($data->_emailAddress); ?></td>
	<td><?php echo CHtml::encode($data->_name); ?></td>
	<td><?php echo CHtml::encode($data->_surname); ?></td>	
	<td><?php echo CHtml::encode($data->_accessLevel_id); ?></td>
	<td><?php echo CHtml::encode($data->_dateTimeInserted); ?></td>
</tr>
		
	</tbody>
</table>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('_password')); ?>:</b>
	<?php echo CHtml::encode($data->_password); ?>
	<br />

	*/ ?>

</div>