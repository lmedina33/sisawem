<?php
/* @var $this FuncionarioAsController */
/* @var $model FuncionarioAs */

$this->breadcrumbs=array(
	'Funcionario Ases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FuncionarioAs', 'url'=>array('index')),
	array('label'=>'Create FuncionarioAs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funcionario-as-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Funcionario Ases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'funcionario-as-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cedula_id_AS',
		'nombre_AS',
		'apellido1_AS',
		'apellido2_AS',
		'fech_nacimiento_AS',
		'genero_AS',
		/*
		'cod_iniciales_AS',
		'telefono1_AS',
		'telefono2_AS',
		'email_AS',
		'direccion_AS',
		'tipo_funcionario_AS',
		'fech_ingreso_AS',
		'estado_AS',
		'nacionalidad_AS',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
