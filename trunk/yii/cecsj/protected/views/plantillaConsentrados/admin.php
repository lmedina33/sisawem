<?php
/* @var $this PlantillaConsentradosController */
/* @var $model PlantillaConsentrados */

$this->breadcrumbs=array(
	'Plantilla Consentradoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PlantillaConsentrados', 'url'=>array('index')),
	array('label'=>'Create PlantillaConsentrados', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#plantilla-consentrados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Plantilla Consentradoses</h1>

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
	'id'=>'plantilla-consentrados-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_consentrado',
		'cedula_id_ER',
		'nom_estudiante',
		'periodo1',
		'porc_p1',
		'periodo2',
		/*
		'porc_p2',
		'periodo3',
		'porc_p3',
		'anual',
		'estado_ER',
		'id_MP',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
