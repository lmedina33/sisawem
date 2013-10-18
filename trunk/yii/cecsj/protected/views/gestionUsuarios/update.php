<?php
/* @var $this GestionUsuariosController */
/* @var $model GestionUsuarios */

$this->breadcrumbs=array(
	'Gestion Usuarioses'=>array('index'),
	$model->id_GU=>array('view','id'=>$model->id_GU),
	'Update',
);

$this->menu=array(
	array('label'=>'List GestionUsuarios', 'url'=>array('index')),
	array('label'=>'Create GestionUsuarios', 'url'=>array('create')),
	array('label'=>'View GestionUsuarios', 'url'=>array('view', 'id'=>$model->id_GU)),
	array('label'=>'Manage GestionUsuarios', 'url'=>array('admin')),
);
?>

<h1>Update GestionUsuarios <?php echo $model->id_GU; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>