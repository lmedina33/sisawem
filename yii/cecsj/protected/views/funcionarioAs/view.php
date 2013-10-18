<?php
/* @var $this FuncionarioAsController */
/* @var $model FuncionarioAs */

$this->breadcrumbs=array(
	'Funcionario Ases'=>array('index'),
	$model->cedula_id_AS,
);

$this->menu=array(
	array('label'=>'List FuncionarioAs', 'url'=>array('index')),
	array('label'=>'Create FuncionarioAs', 'url'=>array('create')),
	array('label'=>'Update FuncionarioAs', 'url'=>array('update', 'id'=>$model->cedula_id_AS)),
	array('label'=>'Delete FuncionarioAs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_id_AS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FuncionarioAs', 'url'=>array('admin')),
);
?>

<h1>View FuncionarioAs #<?php echo $model->cedula_id_AS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_id_AS',
		'nombre_AS',
		'apellido1_AS',
		'apellido2_AS',
		'fech_nacimiento_AS',
		'genero_AS',
		'cod_iniciales_AS',
		'telefono1_AS',
		'telefono2_AS',
		'email_AS',
		'direccion_AS',
		'tipo_funcionario_AS',
		'fech_ingreso_AS',
		'estado_AS',
		'nacionalidad_AS',
	),
)); ?>
