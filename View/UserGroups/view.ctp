<div class="userGroups view">
<h2><?php  echo __('User Group');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['alias_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AllowRegistration'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['allowRegistration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Group'), array('action' => 'edit', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Group'), array('action' => 'delete', $userGroup['UserGroup']['id']), null, __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Permissions'), array('controller' => 'user_group_permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Permission'), array('controller' => 'user_group_permissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Group Permissions');?></h3>
	<?php if (!empty($userGroup['UserGroupPermission'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Controller'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Allowed'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userGroup['UserGroupPermission'] as $userGroupPermission): ?>
		<tr>
			<td><?php echo $userGroupPermission['id'];?></td>
			<td><?php echo $userGroupPermission['user_group_id'];?></td>
			<td><?php echo $userGroupPermission['controller'];?></td>
			<td><?php echo $userGroupPermission['action'];?></td>
			<td><?php echo $userGroupPermission['allowed'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_group_permissions', 'action' => 'view', $userGroupPermission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_group_permissions', 'action' => 'edit', $userGroupPermission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_group_permissions', 'action' => 'delete', $userGroupPermission['id']), null, __('Are you sure you want to delete # %s?', $userGroupPermission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Group Permission'), array('controller' => 'user_group_permissions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($userGroup['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userGroup['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['user_group_id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['first_name'];?></td>
			<td><?php echo $user['last_name'];?></td>
			<td><?php echo $user['active'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
