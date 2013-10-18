<?php
/* @var $this GestionUsuarioPrController */
/* @var $model GestionUsuarioPr */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_id_PR'); ?>
		<?php echo $form->textField($model,'cedula_id_PR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_PR'); ?>
		<?php echo $form->textField($model,'usuario_PR',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasena_PR'); ?>
		<?php echo $form->textField($model,'contrasena_PR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->