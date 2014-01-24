<?php
/* @var $this EstateController */
/* @var $model Estate */

$this->breadcrumbs=array(
	'Estates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estate', 'url'=>array('index')),
	array('label'=>'Manage Estate', 'url'=>array('admin')),
);
?>

<h1>Create Estate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>