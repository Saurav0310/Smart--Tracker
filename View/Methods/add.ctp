<div class="methods form">
<?php echo $this->Form->create('Method');?>
	<fieldset>
		<legend><?php echo __('Add Method'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Methods'), array('action' => 'index'));?></li>
	</ul>
</div>
