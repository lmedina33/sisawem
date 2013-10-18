<?php
/* @var $this GestionUsuarioErController */
/* @var $model GestionUsuarioEr */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_id_ER'); ?>
		<?php echo $form->textField($model,'cedula_id_ER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_ER'); ?>
		<?php echo $form->textField($model,'usuario_ER',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasena_ER'); ?>
		<?php echo $form->textField($model,'contrasena_ER',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->