<?php
/* @var $this GestionUsuarioPrController */
/* @var $model GestionUsuarioPr */

$this->breadcrumbs=array(
	'Gestion Usuario Prs'=>array('index'),
	$model->cedula_id_PR=>array('view','id'=>$model->cedula_id_PR),
	'Update',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioPr', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioPr', 'url'=>array('create')),
	array('label'=>'View GestionUsuarioPr', 'url'=>array('view', 'id'=>$model->cedula_id_PR)),
	array('label'=>'Manage GestionUsuarioPr', 'url'=>array('admin')),
);
?>

<h1>Update GestionUsuarioPr <?php echo $model->cedula_id_PR; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>