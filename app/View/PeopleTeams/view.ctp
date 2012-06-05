<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('Edit People Team'), array('action' => 'edit', $peopleTeam['PeopleTeam']['person_id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete People Team'), array('action' => 'delete', $peopleTeam['PeopleTeam']['person_id']), null, __('Are you sure you want to delete # %s?', $peopleTeam['PeopleTeam']['person_id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List People Teams'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New People Team'), array('action' => 'add')); ?> </li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
			
			</ul>
		</div>
	</div>
	<div class="peopleTeams view span9">
	<h2><?php  echo __('People Team');?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peopleTeam['PeopleTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Id'); ?></dt>
		<dd>
			<?php echo h($peopleTeam['PeopleTeam']['person_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peopleTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $peopleTeam['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($peopleTeam['PeopleTeam']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eligible'); ?></dt>
		<dd>
			<?php echo h($peopleTeam['PeopleTeam']['eligible']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>