<div class="calls form">
<?php echo $this->Form->create('Call');?>
	<fieldset>
		<legend><?php echo __('Edit Call'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('activity_type_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('activity_date');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('recieved_on_id');
		echo $this->Form->input('shift_id');
		echo $this->Form->input('report_number');
		echo $this->Form->input('integration_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Call.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Call.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Calls'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recieved Ons'), array('controller' => 'recieved_ons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recieved On'), array('controller' => 'recieved_ons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift'), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integration Types'), array('controller' => 'integration_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integration Type'), array('controller' => 'integration_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
