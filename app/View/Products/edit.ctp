<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index'));?></li>
				<li class="nav-header">Related Actions</li>
			</ul>
		</div>
	</div>
	
	<div class="span9">
		
		<div class="products form-horizontal well">
		<?php echo $this->Form->create('Product', array('inputDefaults' => Configure::read('inputDefaults')));?>
			<fieldset>
				<legend><?php echo __('Edit Product'); ?></legend>
				<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				?>
				<div class="form-actions">
					<input type="submit" value="Submit" class="btn btn-primary" />
				</div>
			</fieldset>
		<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

