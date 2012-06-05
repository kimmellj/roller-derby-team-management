<div class="row-fluid">
	<div class="span3">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
		<li><?php echo $this->Html->link(__('Edit Committees Person'), array('action' => 'edit', $committeesPerson['CommitteesPerson']['committee_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Committees Person'), array('action' => 'delete', $committeesPerson['CommitteesPerson']['committee_id']), null, __('Are you sure you want to delete # %s?', $committeesPerson['CommitteesPerson']['committee_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Committees People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Committees Person'), array('action' => 'add')); ?> </li>
				<li class="nav-header">Related Actions</li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
			
			</ul>
		</div>
	</div>
	<div class="committeesPeople view span9">
	<h2><?php  echo __('Committees Person');?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($committeesPerson['CommitteesPerson']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Committee Id'); ?></dt>
		<dd>
			<?php echo h($committeesPerson['CommitteesPerson']['committee_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($committeesPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $committeesPerson['Person']['id'])); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>