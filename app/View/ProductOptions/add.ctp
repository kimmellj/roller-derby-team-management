<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('List Product Options'), array('action' => 'index'));?></li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	
	<div class="span9">
		
		<div class="productOptions form-horizontal well">
		<?php echo $this->Form->create('ProductOption', array('inputDefaults' => Configure::read('inputDefaults')));?>
			<fieldset>
				<legend><?php echo __('Add Product Option'); ?></legend>
				<?php
				echo $this->Form->input('name');
				echo $this->Form->input('qty');
				echo $this->Form->input('cost');
				echo $this->Form->input('retail');
				echo $this->Form->input('product_id');
				?>
				<div class="form-actions">
					<input type="submit" value="Submit" class="btn btn-primary" />
				</div>
			</fieldset>
		<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

