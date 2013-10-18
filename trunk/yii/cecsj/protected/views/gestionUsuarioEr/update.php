<?php
/* @var $this GestionUsuarioErController */
/* @var $model GestionUsuarioEr */

$this->breadcrumbs=array(
	'Gestion Usuario Ers'=>array('index'),
	$model->cedula_id_ER=>array('view','id'=>$model->cedula_id_ER),
	'Update',
);

$this->menu=array(
	array('label'=>'List GestionUsuarioEr', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarioEr', 'url'=>array('create')),
	array('label'=>'View GestionUsuarioEr', 'url'=>array('view', 'id'=>$model->cedula_id_ER)),
	array('label'=>'Manage GestionUsuarioEr', 'url'=>array('admin')),
);
?>

<h1>Update GestionUsuarioEr <?php echo $model->cedula_id_ER; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>