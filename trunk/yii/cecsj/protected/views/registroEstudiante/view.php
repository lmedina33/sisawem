<?php
/* @var $this RegistroEstudianteController */
/* @var $model RegistroEstudiante */

$this->breadcrumbs=array(
	'Registro Estudiantes'=>array('index'),
	$model->id_RE,
);

$this->menu=array(
	array('label'=>'List RegistroEstudiante', 'url'=>array('index')),
	array('label'=>'Create RegistroEstudiante', 'url'=>array('create')),
	array('label'=>'Update RegistroEstudiante', 'url'=>array('update', 'id'=>$model->id_RE)),
	array('label'=>'Delete RegistroEstudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_RE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RegistroEstudiante', 'url'=>array('admin')),
);
?>

<h1>View RegistroEstudiante #<?php echo $model->id_RE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_RE',
		'anio_RE',
		'nivel_RE',
		'estado_RE',
		'n_profe_guia_RE',
	),
)); ?>
