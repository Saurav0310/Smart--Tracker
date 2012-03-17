<div class="methods view">
<h2><?php  echo __('Method');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($method['Method']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($method['Method']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Method'), array('action' => 'edit', $method['Method']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Method'), array('action' => 'delete', $method['Method']['id']), null, __('Are you sure you want to delete # %s?', $method['Method']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Methods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Method'), array('action' => 'add')); ?> </li>
	</ul>
</div>
