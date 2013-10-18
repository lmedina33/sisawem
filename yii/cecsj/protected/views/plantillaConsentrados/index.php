<?php
/* @var $this PlantillaConsentradosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plantilla Consentradoses',
);

$this->menu=array(
	array('label'=>'Create PlantillaConsentrados', 'url'=>array('create')),
	array('label'=>'Manage PlantillaConsentrados', 'url'=>array('admin')),
);
?>

<h1>Plantilla Consentradoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
