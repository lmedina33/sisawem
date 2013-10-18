<?php
/* @var $this FuncionarioPrController */
/* @var $model FuncionarioPr */

$this->breadcrumbs=array(
	'Funcionario Prs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FuncionarioPr', 'url'=>array('index')),
	array('label'=>'Manage FuncionarioPr', 'url'=>array('admin')),
);
?>

<h1>Create FuncionarioPr</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>