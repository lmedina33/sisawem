<?php
/* @var $this PlantillaConsentradosController */
/* @var $model PlantillaConsentrados */

$this->breadcrumbs=array(
	'Plantilla Consentradoses'=>array('index'),
	$model->id_consentrado,
);

$this->menu=array(
	array('label'=>'List PlantillaConsentrados', 'url'=>array('index')),
	array('label'=>'Create PlantillaConsentrados', 'url'=>array('create')),
	array('label'=>'Update PlantillaConsentrados', 'url'=>array('update', 'id'=>$model->id_consentrado)),
	array('label'=>'Delete PlantillaConsentrados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consentrado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlantillaConsentrados', 'url'=>array('admin')),
);
?>

<h1>View PlantillaConsentrados #<?php echo $model->id_consentrado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_consentrado',
		'cedula_id_ER',
		'nom_estudiante',
		'periodo1',
		'porc_p1',
		'periodo2',
		'porc_p2',
		'periodo3',
		'porc_p3',
		'anual',
		'estado_ER',
		'id_MP',
	),
)); ?>
