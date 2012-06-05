<div class="row-fluid">
	<div class="span3">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
		<li><?php echo $this->Html->link(__('Edit Committee'), array('action' => 'edit', $committee['Committee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Committee'), array('action' => 'delete', $committee['Committee']['id']), null, __('Are you sure you want to delete # %s?', $committee['Committee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Committees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Committee'), array('action' => 'add')); ?> </li>
				<li class="nav-header">Related Actions</li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
			
			</ul>
		</div>
	</div>
	<div class="committees view span9">
	<h2><?php  echo __('Committee');?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($committee['Committee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($committee['Committee']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head'); ?></dt>
		<dd>
			<?php echo h($committee['Committee']['head']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>