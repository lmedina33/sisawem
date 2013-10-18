<?php
/* @var $this PlantillaConsentradosController */
/* @var $model PlantillaConsentrados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plantilla-consentrados-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_id_ER'); ?>
		<?php echo $form->textField($model,'cedula_id_ER'); ?>
		<?php echo $form->error($model,'cedula_id_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_estudiante'); ?>
		<?php echo $form->textField($model,'nom_estudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo1'); ?>
		<?php echo $form->textField($model,'periodo1'); ?>
		<?php echo $form->error($model,'periodo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porc_p1'); ?>
		<?php echo $form->textField($model,'porc_p1'); ?>
		<?php echo $form->error($model,'porc_p1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo2'); ?>
		<?php echo $form->textField($model,'periodo2'); ?>
		<?php echo $form->error($model,'periodo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porc_p2'); ?>
		<?php echo $form->textField($model,'porc_p2'); ?>
		<?php echo $form->error($model,'porc_p2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo3'); ?>
		<?php echo $form->textField($model,'periodo3'); ?>
		<?php echo $form->error($model,'periodo3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porc_p3'); ?>
		<?php echo $form->textField($model,'porc_p3'); ?>
		<?php echo $form->error($model,'porc_p3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anual'); ?>
		<?php echo $form->textField($model,'anual'); ?>
		<?php echo $form->error($model,'anual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_ER'); ?>
		<?php echo $form->textField($model,'estado_ER',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estado_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_MP'); ?>
		<?php echo $form->textField($model,'id_MP'); ?>
		<?php echo $form->error($model,'id_MP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->