<?php
/* @var $this RegistroEstudianteController */
/* @var $model RegistroEstudiante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_RE'); ?>
		<?php echo $form->textField($model,'id_RE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_RE'); ?>
		<?php echo $form->textField($model,'anio_RE',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_RE'); ?>
		<?php echo $form->textField($model,'nivel_RE',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_RE'); ?>
		<?php echo $form->textField($model,'estado_RE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_profe_guia_RE'); ?>
		<?php echo $form->textField($model,'n_profe_guia_RE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->