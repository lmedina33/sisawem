<?php
/* @var $this EstudianteRController */
/* @var $data EstudianteR */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_ER')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_id_ER), array('view', 'id'=>$data->cedula_id_ER)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ER')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1_ER')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2_ER')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_nacimiento_ER')); ?>:</b>
	<?php echo CHtml::encode($data->fech_nacimiento_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_ER')); ?>:</b>
	<?php echo CHtml::encode($data->genero_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_iniciales_ER')); ?>:</b>
	<?php echo CHtml::encode($data->cod_iniciales_ER); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_ER')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_ER')); ?>:</b>
	<?php echo CHtml::encode($data->email_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_ER')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_ingreso_ER')); ?>:</b>
	<?php echo CHtml::encode($data->fech_ingreso_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_encargado_ER')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_encargado_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono2_ER')); ?>:</b>
	<?php echo CHtml::encode($data->telefono2_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pago_mensual_ER')); ?>:</b>
	<?php echo CHtml::encode($data->pago_mensual_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('becado_ER')); ?>:</b>
	<?php echo CHtml::encode($data->becado_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad_ER')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_RE')); ?>:</b>
	<?php echo CHtml::encode($data->id_RE); ?>
	<br />

	*/ ?>

</div>