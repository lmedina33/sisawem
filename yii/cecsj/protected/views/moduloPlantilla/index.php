<?php
/* @var $this ModuloPlantillaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Modulo Plantillas',
);

$this->menu=array(
	array('label'=>'Create ModuloPlantilla', 'url'=>array('create')),
	array('label'=>'Manage ModuloPlantilla', 'url'=>array('admin')),
);
?>

<h1>Modulo Plantillas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
