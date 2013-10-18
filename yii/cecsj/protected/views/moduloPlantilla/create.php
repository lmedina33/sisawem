<?php
/* @var $this ModuloPlantillaController */
/* @var $model ModuloPlantilla */

$this->breadcrumbs=array(
	'Modulo Plantillas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModuloPlantilla', 'url'=>array('index')),
	array('label'=>'Manage ModuloPlantilla', 'url'=>array('admin')),
);
?>

<h1>Create ModuloPlantilla</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>