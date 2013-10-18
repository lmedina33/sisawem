<?php
/* @var $this PlantillaConsentradosController */
/* @var $model PlantillaConsentrados */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_consentrado'); ?>
		<?php echo $form->textField($model,'id_consentrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_id_ER'); ?>
		<?php echo $form->textField($model,'cedula_id_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_estudiante'); ?>
		<?php echo $form->textField($model,'nom_estudiante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo1'); ?>
		<?php echo $form->textField($model,'periodo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porc_p1'); ?>
		<?php echo $form->textField($model,'porc_p1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo2'); ?>
		<?php echo $form->textField($model,'periodo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porc_p2'); ?>
		<?php echo $form->textField($model,'porc_p2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo3'); ?>
		<?php echo $form->textField($model,'periodo3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porc_p3'); ?>
		<?php echo $form->textField($model,'porc_p3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anual'); ?>
		<?php echo $form->textField($model,'anual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_ER'); ?>
		<?php echo $form->textField($model,'estado_ER',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_MP'); ?>
		<?php echo $form->textField($model,'id_MP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->