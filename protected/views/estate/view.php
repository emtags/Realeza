<?php
/* @var $this EstateController */
/* @var $model Estate */

$this->breadcrumbs=array(
	'Estates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Estate', 'url'=>array('index')),
	array('label'=>'Create Estate', 'url'=>array('create')),
	array('label'=>'Update Estate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Estate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estate', 'url'=>array('admin')),
);
?>

<h1>View Estate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'street_address',
		'route',
		'intersection',
		'political',
		'country',
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
	),
)); ?>
