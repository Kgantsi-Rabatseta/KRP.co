<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'_version'); ?>
		<?php echo $form->textField($model,'_version',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'_version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_userName'); ?>
		<?php echo $form->textField($model,'_userName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'_userName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_emailAddress'); ?>
		<?php echo $form->textField($model,'_emailAddress',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'_emailAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_name'); ?>
		<?php echo $form->textField($model,'_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_surname'); ?>
		<?php echo $form->textField($model,'_surname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'_surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_accessLevel_id'); ?>
		<?php echo $form->textField($model,'_accessLevel_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'_accessLevel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_dateTimeInserted'); ?>
		<?php echo $form->textField($model,'_dateTimeInserted'); 
			
			?>
		<?php echo $form->error($model,'_dateTimeInserted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_password'); ?>
		<?php echo $form->textField($model,'_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->