<?php
/* @var $this UsuarioAdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Ads',
);

$this->menu=array(
	array('label'=>'Create UsuarioAd', 'url'=>array('create')),
	array('label'=>'Manage UsuarioAd', 'url'=>array('admin')),
);
?>

<h1>Usuario Ads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
