<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('Edit Product Option'), array('action' => 'edit', $productOption['ProductOption']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Product Option'), array('action' => 'delete', $productOption['ProductOption']['id']), null, __('Are you sure you want to delete # %s?', $productOption['ProductOption']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Product Options'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product Option'), array('action' => 'add')); ?> </li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			
			</ul>
		</div>
	</div>
	<div class="productOptions view span9">
	<h2><?php  echo __('Product Option');?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productOption['ProductOption']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($productOption['ProductOption']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($productOption['ProductOption']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($productOption['ProductOption']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retail'); ?></dt>
		<dd>
			<?php echo h($productOption['ProductOption']['retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productOption['Product']['name'], array('controller' => 'products', 'action' => 'view', $productOption['Product']['id'])); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>