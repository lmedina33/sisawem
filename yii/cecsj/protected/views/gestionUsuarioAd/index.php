<?php
/* @var $this GestionUsuarioAdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestion Usuario Ads',
);

$this->menu=array(
	array('label'=>'Create GestionUsuarioAd', 'url'=>array('create')),
	array('label'=>'Manage GestionUsuarioAd', 'url'=>array('admin')),
);
?>

<h1>Gestion Usuario Ads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
