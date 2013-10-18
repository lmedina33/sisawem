<?php
/* @var $this EstudiantePiController */
/* @var $data EstudiantePi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estudiante_ep')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_estudiante_ep), array('view', 'id'=>$data->id_estudiante_ep)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_ep')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ep')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_na_ep')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_na_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_ep')); ?>:</b>
	<?php echo CHtml::encode($data->genero_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_ep')); ?>:</b>
	<?php echo CHtml::encode($data->celular_ep); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_ep')); ?>:</b>
	<?php echo CHtml::encode($data->correo_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_ep')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_ep')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_ep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificación_ma')); ?>:</b>
	<?php echo CHtml::encode($data->identificación_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ma')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_h_ma')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_h_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_t_ma')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_t_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_ma')); ?>:</b>
	<?php echo CHtml::encode($data->celular_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oficio_ma')); ?>:</b>
	<?php echo CHtml::encode($data->oficio_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_trabajo_ma')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_trabajo_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificación_pa')); ?>:</b>
	<?php echo CHtml::encode($data->identificación_pa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_pa')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_pa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_h_pa')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_h_pa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_t_pa')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_t_pa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_pa')); ?>:</b>
	<?php echo CHtml::encode($data->celular_pa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oficio_pa')); ?>:</b>
	<?php echo CHtml::encode($data->oficio_pa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_trabajo_pa')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_trabajo_pa); ?>
	<br />

	*/ ?>

</div>