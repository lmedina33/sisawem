<?php
/* @var $this EstudiantePiController */
/* @var $model EstudiantePi */

$this->breadcrumbs=array(
	'Estudiante Pis'=>array('index'),
	$model->id_estudiante_ep,
);

$this->menu=array(
	array('label'=>'List EstudiantePi', 'url'=>array('index')),
	array('label'=>'Create EstudiantePi', 'url'=>array('create')),
	array('label'=>'Update EstudiantePi', 'url'=>array('update', 'id'=>$model->id_estudiante_ep)),
	array('label'=>'Delete EstudiantePi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estudiante_ep),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstudiantePi', 'url'=>array('admin')),
);
?>

<h1>View EstudiantePi #<?php echo $model->id_estudiante_ep; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estudiante_ep',
		'identificacion_ep',
		'fecha_solicitud',
		'nombre_ep',
		'fecha_na_ep',
		'genero_ep',
		'celular_ep',
		'correo_ep',
		'nivel_ep',
		'direccion_ep',
		'identificación_ma',
		'nombre_ma',
		'telefono_h_ma',
		'telefono_t_ma',
		'celular_ma',
		'oficio_ma',
		'lugar_trabajo_ma',
		'identificación_pa',
		'nombre_pa',
		'telefono_h_pa',
		'telefono_t_pa',
		'celular_pa',
		'oficio_pa',
		'lugar_trabajo_pa',
	),
)); ?>
