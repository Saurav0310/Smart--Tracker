<div class="recievedOns form">
<?php echo $this->Form->create('RecievedOn');?>
	<fieldset>
		<legend><?php echo __('Edit Recieved On'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecievedOn.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RecievedOn.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recieved Ons'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
