<?php
/* @var $this EstudianteRController */
/* @var $model EstudianteR */

$this->breadcrumbs=array(
	'Estudiante Rs'=>array('index'),
	$model->cedula_id_ER,
);

$this->menu=array(
	array('label'=>'List EstudianteR', 'url'=>array('index')),
	array('label'=>'Create EstudianteR', 'url'=>array('create')),
	array('label'=>'Update EstudianteR', 'url'=>array('update', 'id'=>$model->cedula_id_ER)),
	array('label'=>'Delete EstudianteR', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_id_ER),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstudianteR', 'url'=>array('admin')),
);
?>

<h1>View EstudianteR #<?php echo $model->cedula_id_ER; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_id_ER',
		'nombre_ER',
		'apellido1_ER',
		'apellido2_ER',
		'fech_nacimiento_ER',
		'genero_ER',
		'cod_iniciales_ER',
		'telefono_ER',
		'email_ER',
		'direccion_ER',
		'fech_ingreso_ER',
		'nombre_encargado_ER',
		'telefono2_ER',
		'pago_mensual_ER',
		'becado_ER',
		'nacionalidad_ER',
		'id_RE',
	),
)); ?>
