<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List Committees'), array('controller' => 'committees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Committee'), array('controller' => 'committees', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
			
			</ul>
		</div>
	</div>
	<div class="people view span9">
	<h2><?php  echo __('Person');?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Real Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['real_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($person['Person']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($person['Person']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($person['Person']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($person['Person']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Number'); ?></dt>
		<dd>
			<?php echo h($person['Person']['insurance_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['emergency_contact_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Number'); ?></dt>
		<dd>
			<?php echo h($person['Person']['emergency_contact_number']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>