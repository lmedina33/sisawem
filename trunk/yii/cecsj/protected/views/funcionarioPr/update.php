<?php
/* @var $this FuncionarioPrController */
/* @var $model FuncionarioPr */

$this->breadcrumbs=array(
	'Funcionario Prs'=>array('index'),
	$model->cedula_id_PR=>array('view','id'=>$model->cedula_id_PR),
	'Update',
);

$this->menu=array(
	array('label'=>'List FuncionarioPr', 'url'=>array('index')),
	array('label'=>'Create FuncionarioPr', 'url'=>array('create')),
	array('label'=>'View FuncionarioPr', 'url'=>array('view', 'id'=>$model->cedula_id_PR)),
	array('label'=>'Manage FuncionarioPr', 'url'=>array('admin')),
);
?>

<h1>Update FuncionarioPr <?php echo $model->cedula_id_PR; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>