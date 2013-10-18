<?php
/* @var $this RegistroEstudianteController */
/* @var $data RegistroEstudiante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_RE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_RE), array('view', 'id'=>$data->id_RE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_RE')); ?>:</b>
	<?php echo CHtml::encode($data->anio_RE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_RE')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_RE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_RE')); ?>:</b>
	<?php echo CHtml::encode($data->estado_RE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_profe_guia_RE')); ?>:</b>
	<?php echo CHtml::encode($data->n_profe_guia_RE); ?>
	<br />


</div>