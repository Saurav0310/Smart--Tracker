<div class="shifts view">
<h2><?php  echo __('Shift');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shift['Shift']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shift['Shift']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shift'), array('action' => 'edit', $shift['Shift']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shift'), array('action' => 'delete', $shift['Shift']['id']), null, __('Are you sure you want to delete # %s?', $shift['Shift']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Calls');?></h3>
	<?php if (!empty($shift['Call'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity Type Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Activity Date'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Recieved On Id'); ?></th>
		<th><?php echo __('Shift Id'); ?></th>
		<th><?php echo __('Report Number'); ?></th>
		<th><?php echo __('Integration Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shift['Call'] as $call): ?>
		<tr>
			<td><?php echo $call['id'];?></td>
			<td><?php echo $call['activity_type_id'];?></td>
			<td><?php echo $call['user_id'];?></td>
			<td><?php echo $call['activity_date'];?></td>
			<td><?php echo $call['start_time'];?></td>
			<td><?php echo $call['end_time'];?></td>
			<td><?php echo $call['recieved_on_id'];?></td>
			<td><?php echo $call['shift_id'];?></td>
			<td><?php echo $call['report_number'];?></td>
			<td><?php echo $call['integration_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calls', 'action' => 'view', $call['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calls', 'action' => 'edit', $call['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calls', 'action' => 'delete', $call['id']), null, __('Are you sure you want to delete # %s?', $call['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
