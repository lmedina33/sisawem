<?php
/* @var $this PlantillaConsentradosController */
/* @var $data PlantillaConsentrados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consentrado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_consentrado), array('view', 'id'=>$data->id_consentrado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_ER')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_id_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_estudiante')); ?>:</b>
	<?php echo CHtml::encode($data->nom_estudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo1')); ?>:</b>
	<?php echo CHtml::encode($data->periodo1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porc_p1')); ?>:</b>
	<?php echo CHtml::encode($data->porc_p1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo2')); ?>:</b>
	<?php echo CHtml::encode($data->periodo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porc_p2')); ?>:</b>
	<?php echo CHtml::encode($data->porc_p2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo3')); ?>:</b>
	<?php echo CHtml::encode($data->periodo3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porc_p3')); ?>:</b>
	<?php echo CHtml::encode($data->porc_p3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anual')); ?>:</b>
	<?php echo CHtml::encode($data->anual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_ER')); ?>:</b>
	<?php echo CHtml::encode($data->estado_ER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_MP')); ?>:</b>
	<?php echo CHtml::encode($data->id_MP); ?>
	<br />

	*/ ?>

</div>