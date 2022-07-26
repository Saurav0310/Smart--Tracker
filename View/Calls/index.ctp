<div class="calls index">
	<h2><?php echo __('Calls');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('activity_type_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('activity_date');?></th>
			<th><?php echo $this->Paginator->sort('start_time');?></th>
			<th><?php echo $this->Paginator->sort('end_time');?></th>
			<th><?php echo $this->Paginator->sort('recieved_on_id');?></th>
			<th><?php echo $this->Paginator->sort('shift_id');?></th>
			<th><?php echo $this->Paginator->sort('report_number');?></th>
			<th><?php echo $this->Paginator->sort('integration_type_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($calls as $call): ?>
	<tr>
		<td><?php echo h($call['Call']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($call['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $call['ActivityType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($call['User']['username'], array('controller' => 'users', 'action' => 'view', $call['User']['id'])); ?>
		</td>
		<td><?php echo h($call['Call']['activity_date']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($call['Call']['end_time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($call['RecievedOn']['name'], array('controller' => 'recieved_ons', 'action' => 'view', $call['RecievedOn']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($call['Shift']['name'], array('controller' => 'shifts', 'action' => 'view', $call['Shift']['id'])); ?>
		</td>
		<td><?php echo h($call['Call']['report_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($call['IntegrationType']['name'], array('controller' => 'integration_types', 'action' => 'view', $call['IntegrationType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $call['Call']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $call['Call']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $call['Call']['id']), null, __('Are you sure you want to delete # %s?', $call['Call']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Call'), array('action' => 'add')); ?></li>
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
