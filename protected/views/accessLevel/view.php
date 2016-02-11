<?php
/* @var $this AccessLevelController */
/* @var $model AccessLevel */

$this->breadcrumbs=array(
	'Access Levels'=>array('index'),
	$model->_id,
);

$this->menu=array(
	array('label'=>'List AccessLevel', 'url'=>array('index')),
	array('label'=>'Create AccessLevel', 'url'=>array('create')),
	array('label'=>'Update AccessLevel', 'url'=>array('update', 'id'=>$model->_id)),
	array('label'=>'Delete AccessLevel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccessLevel', 'url'=>array('admin')),
);
?>

<h1>View AccessLevel #<?php echo $model->_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'_id',
		'_version',
		'_levelName',
		'_dateTimeInserted',
	),
)); ?>
