<?php
$this->breadcrumbs=array(
	'Order Logs'=>array('index'),
	$model->log_id=>array('view','id'=>$model->log_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderLog', 'url'=>array('index')),
	array('label'=>'Create OrderLog', 'url'=>array('create')),
	array('label'=>'View OrderLog', 'url'=>array('view', 'id'=>$model->log_id)),
	array('label'=>'Manage OrderLog', 'url'=>array('admin')),
);
?>

<h1>Update OrderLog <?php echo $model->log_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>