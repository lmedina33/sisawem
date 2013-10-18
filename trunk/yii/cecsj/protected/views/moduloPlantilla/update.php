<?php
/* @var $this ModuloPlantillaController */
/* @var $model ModuloPlantilla */

$this->breadcrumbs=array(
	'Modulo Plantillas'=>array('index'),
	$model->id_MP=>array('view','id'=>$model->id_MP),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModuloPlantilla', 'url'=>array('index')),
	array('label'=>'Create ModuloPlantilla', 'url'=>array('create')),
	array('label'=>'View ModuloPlantilla', 'url'=>array('view', 'id'=>$model->id_MP)),
	array('label'=>'Manage ModuloPlantilla', 'url'=>array('admin')),
);
?>

<h1>Update ModuloPlantilla <?php echo $model->id_MP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>