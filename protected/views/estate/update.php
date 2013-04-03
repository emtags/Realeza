<?php
/* @var $this EstateController */
/* @var $model Estate */

$this->breadcrumbs=array(
	'Estates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estate', 'url'=>array('index')),
	array('label'=>'Create Estate', 'url'=>array('create')),
	array('label'=>'View Estate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Estate', 'url'=>array('admin')),
);
?>

<h1>Update Estate <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>