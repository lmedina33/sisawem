<?php
/* @var $this RegistroEstudianteController */
/* @var $model RegistroEstudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-estudiante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_RE'); ?>
		<?php echo $form->textField($model,'anio_RE',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'anio_RE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_RE'); ?>
		<?php echo $form->textField($model,'nivel_RE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'nivel_RE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_RE'); ?>
		<?php echo $form->textField($model,'estado_RE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'estado_RE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_profe_guia_RE'); ?>
		<?php echo $form->textField($model,'n_profe_guia_RE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'n_profe_guia_RE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->