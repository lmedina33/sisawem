<?php
/* @var $this ModuloPlantillaController */
/* @var $data ModuloPlantilla */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_MP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_MP), array('view', 'id'=>$data->id_MP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_id_PR')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_id_PR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />


</div>