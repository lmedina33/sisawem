<?php
/* @var $this EstudianteRController */
/* @var $model EstudianteR */

$this->breadcrumbs=array(
	'Estudiante Rs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EstudianteR', 'url'=>array('index')),
	array('label'=>'Create EstudianteR', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estudiante-r-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Estudiante Rs</h1>

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
	'id'=>'estudiante-r-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cedula_id_ER',
		'nombre_ER',
		'apellido1_ER',
		'apellido2_ER',
		'fech_nacimiento_ER',
		'genero_ER',
		/*
		'cod_iniciales_ER',
		'telefono_ER',
		'email_ER',
		'direccion_ER',
		'fech_ingreso_ER',
		'nombre_encargado_ER',
		'telefono2_ER',
		'pago_mensual_ER',
		'becado_ER',
		'nacionalidad_ER',
		'id_RE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
