<?php
/* @var $this EstateController */
/* @var $model Estate */

$this->breadcrumbs=array(
	'Estates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Estate', 'url'=>array('index')),
	array('label'=>'Create Estate', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estate-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Estates</h1>

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
	'id'=>'estate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'street_address',
		'route',
		'intersection',
		'political',
		'country',
		/*
		'administrative_area_level_1',
		'administrative_area_level_2',
		'administrative_area_level_3',
		'colloquial_area',
		'locality',
		'sublocality',
		'neighborhood',
		'premise',
		'subpremise',
		'postal_code',
		'natural_feature',
		'airport',
		'park',
		'point_of_interest',
		'post_box',
		'street_number',
		'floor',
		'room',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
