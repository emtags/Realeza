<?php
/* @var $this EstateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estates',
);

$this->menu=array(
	array('label'=>'Create Estate', 'url'=>array('create')),
	array('label'=>'Manage Estate', 'url'=>array('admin')),
);
?>

<h1>Estates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
