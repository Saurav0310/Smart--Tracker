<div class="calls view">
<h2><?php  echo __('Call');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($call['Call']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($call['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $call['ActivityType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($call['User']['username'], array('controller' => 'users', 'action' => 'view', $call['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Date'); ?></dt>
		<dd>
			<?php echo h($call['Call']['activity_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($call['Call']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($call['Call']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recieved On'); ?></dt>
		<dd>
			<?php echo $this->Html->link($call['RecievedOn']['name'], array('controller' => 'recieved_ons', 'action' => 'view', $call['RecievedOn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shift'); ?></dt>
		<dd>
			<?php echo $this->Html->link($call['Shift']['name'], array('controller' => 'shifts', 'action' => 'view', $call['Shift']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report Number'); ?></dt>
		<dd>
			<?php echo h($call['Call']['report_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Integration Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($call['IntegrationType']['name'], array('controller' => 'integration_types', 'action' => 'view', $call['IntegrationType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Call'), array('action' => 'edit', $call['Call']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Call'), array('action' => 'delete', $call['Call']['id']), null, __('Are you sure you want to delete # %s?', $call['Call']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('action' => 'add')); ?> </li>
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
