<?php
/* @var $this ModuloPlantillaController */
/* @var $model ModuloPlantilla */

$this->breadcrumbs=array(
	'Modulo Plantillas'=>array('index'),
	$model->id_MP,
);

$this->menu=array(
	array('label'=>'List ModuloPlantilla', 'url'=>array('index')),
	array('label'=>'Create ModuloPlantilla', 'url'=>array('create')),
	array('label'=>'Update ModuloPlantilla', 'url'=>array('update', 'id'=>$model->id_MP)),
	array('label'=>'Delete ModuloPlantilla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_MP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuloPlantilla', 'url'=>array('admin')),
);
?>

<h1>View ModuloPlantilla #<?php echo $model->id_MP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_MP',
		'cedula_id_PR',
		'departamento',
		'nivel',
		'anio',
	),
)); ?>
