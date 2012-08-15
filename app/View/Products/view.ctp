<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
				<li class="nav-header">Related Actions</li>
			
			</ul>
		</div>
	</div>
	<div class="products view span9">
	<h2><?php  echo __('Product');?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>