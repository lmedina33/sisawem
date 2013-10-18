<?php
/* @var $this EstudiantePiController */
/* @var $model EstudiantePi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_estudiante_ep'); ?>
		<?php echo $form->textField($model,'id_estudiante_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_ep'); ?>
		<?php echo $form->textField($model,'identificacion_ep',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_solicitud'); ?>
		<?php echo $form->textField($model,'fecha_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ep'); ?>
		<?php echo $form->textField($model,'nombre_ep',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_na_ep'); ?>
		<?php echo $form->textField($model,'fecha_na_ep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero_ep'); ?>
		<?php echo $form->textField($model,'genero_ep',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_ep'); ?>
		<?php echo $form->textField($model,'celular_ep',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_ep'); ?>
		<?php echo $form->textField($model,'correo_ep',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_ep'); ?>
		<?php echo $form->textField($model,'nivel_ep',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_ep'); ?>
		<?php echo $form->textField($model,'direccion_ep',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificación_ma'); ?>
		<?php echo $form->textField($model,'identificación_ma',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ma'); ?>
		<?php echo $form->textField($model,'nombre_ma',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_h_ma'); ?>
		<?php echo $form->textField($model,'telefono_h_ma',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_t_ma'); ?>
		<?php echo $form->textField($model,'telefono_t_ma',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_ma'); ?>
		<?php echo $form->textField($model,'celular_ma',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oficio_ma'); ?>
		<?php echo $form->textField($model,'oficio_ma',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_trabajo_ma'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_ma',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificación_pa'); ?>
		<?php echo $form->textField($model,'identificación_pa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_pa'); ?>
		<?php echo $form->textField($model,'nombre_pa',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_h_pa'); ?>
		<?php echo $form->textField($model,'telefono_h_pa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_t_pa'); ?>
		<?php echo $form->textField($model,'telefono_t_pa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_pa'); ?>
		<?php echo $form->textField($model,'celular_pa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oficio_pa'); ?>
		<?php echo $form->textField($model,'oficio_pa',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_trabajo_pa'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_pa',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->