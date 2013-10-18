<?php
/* @var $this PlantillaConsentradosController */
/* @var $model PlantillaConsentrados */

$this->breadcrumbs=array(
	'Plantilla Consentradoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlantillaConsentrados', 'url'=>array('index')),
	array('label'=>'Manage PlantillaConsentrados', 'url'=>array('admin')),
);
?>

<h1>Create PlantillaConsentrados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>