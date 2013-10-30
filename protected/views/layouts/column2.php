<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content" class="well">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar" class="well" style="padding: 8px;">
<?php 
		$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
    		array('label'=>'Операции'),
    	),

));
		 $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>$this->menu,

)); 

	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>