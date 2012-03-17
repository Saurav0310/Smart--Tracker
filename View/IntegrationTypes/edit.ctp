<div class="integrationTypes form">
<?php echo $this->Form->create('IntegrationType');?>
	<fieldset>
		<legend><?php echo __('Edit Integration Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IntegrationType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('IntegrationType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Integration Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
