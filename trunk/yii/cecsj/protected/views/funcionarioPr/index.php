<?php
/* @var $this FuncionarioPrController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionario Prs',
);

$this->menu=array(
	array('label'=>'Create FuncionarioPr', 'url'=>array('create')),
	array('label'=>'Manage FuncionarioPr', 'url'=>array('admin')),
);
?>

<h1>Funcionario Prs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
