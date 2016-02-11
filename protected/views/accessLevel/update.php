<?php
/* @var $this AccessLevelController */
/* @var $model AccessLevel */

$this->breadcrumbs=array(
	'Access Levels'=>array('index'),
	$model->_id=>array('view','id'=>$model->_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccessLevel', 'url'=>array('index')),
	array('label'=>'Create AccessLevel', 'url'=>array('create')),
	array('label'=>'View AccessLevel', 'url'=>array('view', 'id'=>$model->_id)),
	array('label'=>'Manage AccessLevel', 'url'=>array('admin')),
);
?>

<h1>Update AccessLevel <?php echo $model->_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>