<?php
/* @var $this SiteController */
/* @var $result string */

$this->pageTitle=Yii::app()->name . ' - Result';
$this->breadcrumbs=array(
	'Result',
);
?>
<div class="error">
<?php echo $result['error']; ?>
</div>
<div class="result">
<?php echo $result['link']; ?>
</div>