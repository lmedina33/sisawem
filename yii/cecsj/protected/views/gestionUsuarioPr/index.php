<?php
/* @var $this GestionUsuarioPrController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestion Usuario Prs',
);

$this->menu=array(
	array('label'=>'Create GestionUsuarioPr', 'url'=>array('create')),
	array('label'=>'Manage GestionUsuarioPr', 'url'=>array('admin')),
);
?>

<h1>Gestion Usuario Prs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
