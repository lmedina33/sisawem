<?php
/* @var $this FuncionarioPrController */
/* @var $data FuncionarioPr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_PR')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_id_PR), array('view', 'id'=>$data->cedula_id_PR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_PR')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1_PR')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2_PR')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_nacimiento_PR')); ?>:</b>
	<?php echo CHtml::encode($data->fech_nacimiento_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo_PR')); ?>:</b>
	<?php echo CHtml::encode($data->sexo_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_iniciales_PR')); ?>:</b>
	<?php echo CHtml::encode($data->cod_iniciales_PR); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono1_PR')); ?>:</b>
	<?php echo CHtml::encode($data->telefono1_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono2_PR')); ?>:</b>
	<?php echo CHtml::encode($data->telefono2_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_PR')); ?>:</b>
	<?php echo CHtml::encode($data->email_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_PR')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_ingreso_PR')); ?>:</b>
	<?php echo CHtml::encode($data->fech_ingreso_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesion')); ?>:</b>
	<?php echo CHtml::encode($data->profesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_asignado')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_asignado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_PR')); ?>:</b>
	<?php echo CHtml::encode($data->estado_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad_PR')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad_PR); ?>
	<br />

	*/ ?>

</div>