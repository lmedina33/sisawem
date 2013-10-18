<?php
/* @var $this UsuarioAdController */
/* @var $model UsuarioAd */

$this->breadcrumbs=array(
	'Usuario Ads'=>array('index'),
	$model->id_AD=>array('view','id'=>$model->id_AD),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioAd', 'url'=>array('index')),
	array('label'=>'Create UsuarioAd', 'url'=>array('create')),
	array('label'=>'View UsuarioAd', 'url'=>array('view', 'id'=>$model->id_AD)),
	array('label'=>'Manage UsuarioAd', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioAd <?php echo $model->id_AD; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>