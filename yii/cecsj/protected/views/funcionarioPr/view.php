<?php
/* @var $this FuncionarioPrController */
/* @var $model FuncionarioPr */

$this->breadcrumbs=array(
	'Funcionario Prs'=>array('index'),
	$model->cedula_id_PR,
);

$this->menu=array(
	array('label'=>'List FuncionarioPr', 'url'=>array('index')),
	array('label'=>'Create FuncionarioPr', 'url'=>array('create')),
	array('label'=>'Update FuncionarioPr', 'url'=>array('update', 'id'=>$model->cedula_id_PR)),
	array('label'=>'Delete FuncionarioPr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_id_PR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FuncionarioPr', 'url'=>array('admin')),
);
?>

<h1>View FuncionarioPr #<?php echo $model->cedula_id_PR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_id_PR',
		'nombre_PR',
		'apellido1_PR',
		'apellido2_PR',
		'fech_nacimiento_PR',
		'sexo_PR',
		'cod_iniciales_PR',
		'telefono1_PR',
		'telefono2_PR',
		'email_PR',
		'direccion_PR',
		'fech_ingreso_PR',
		'profesion',
		'nivel_asignado',
		'estado_PR',
		'nacionalidad_PR',
	),
)); ?>
