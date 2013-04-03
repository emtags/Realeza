<?php
/* @var $this EstateController */
/* @var $data Estate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_address')); ?>:</b>
	<?php echo CHtml::encode($data->street_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route')); ?>:</b>
	<?php echo CHtml::encode($data->route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intersection')); ?>:</b>
	<?php echo CHtml::encode($data->intersection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('political')); ?>:</b>
	<?php echo CHtml::encode($data->political); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administrative_area_level_1')); ?>:</b>
	<?php echo CHtml::encode($data->administrative_area_level_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('administrative_area_level_2')); ?>:</b>
	<?php echo CHtml::encode($data->administrative_area_level_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administrative_area_level_3')); ?>:</b>
	<?php echo CHtml::encode($data->administrative_area_level_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colloquial_area')); ?>:</b>
	<?php echo CHtml::encode($data->colloquial_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locality')); ?>:</b>
	<?php echo CHtml::encode($data->locality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sublocality')); ?>:</b>
	<?php echo CHtml::encode($data->sublocality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('neighborhood')); ?>:</b>
	<?php echo CHtml::encode($data->neighborhood); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('premise')); ?>:</b>
	<?php echo CHtml::encode($data->premise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subpremise')); ?>:</b>
	<?php echo CHtml::encode($data->subpremise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('natural_feature')); ?>:</b>
	<?php echo CHtml::encode($data->natural_feature); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('airport')); ?>:</b>
	<?php echo CHtml::encode($data->airport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('park')); ?>:</b>
	<?php echo CHtml::encode($data->park); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_of_interest')); ?>:</b>
	<?php echo CHtml::encode($data->point_of_interest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_box')); ?>:</b>
	<?php echo CHtml::encode($data->post_box); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_number')); ?>:</b>
	<?php echo CHtml::encode($data->street_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floor')); ?>:</b>
	<?php echo CHtml::encode($data->floor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room')); ?>:</b>
	<?php echo CHtml::encode($data->room); ?>
	<br />

	*/ ?>

</div>