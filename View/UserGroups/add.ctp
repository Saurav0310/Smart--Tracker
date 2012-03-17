<div class="userGroups form">
<?php echo $this->Form->create('UserGroup');?>
	<fieldset>
		<legend><?php echo __('Add User Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('alias_name');
		echo $this->Form->input('allowRegistration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Group Permissions'), array('controller' => 'user_group_permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Permission'), array('controller' => 'user_group_permissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
