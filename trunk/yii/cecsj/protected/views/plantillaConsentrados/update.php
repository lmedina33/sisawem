<?php
/* @var $this PlantillaConsentradosController */
/* @var $model PlantillaConsentrados */

$this->breadcrumbs=array(
	'Plantilla Consentradoses'=>array('index'),
	$model->id_consentrado=>array('view','id'=>$model->id_consentrado),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlantillaConsentrados', 'url'=>array('index')),
	array('label'=>'Create PlantillaConsentrados', 'url'=>array('create')),
	array('label'=>'View PlantillaConsentrados', 'url'=>array('view', 'id'=>$model->id_consentrado)),
	array('label'=>'Manage PlantillaConsentrados', 'url'=>array('admin')),
);
?>

<h1>Update PlantillaConsentrados <?php echo $model->id_consentrado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>