<div class="row-fluid">
	<div class="span3">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index'));?></li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	
	<div class="span9">
		
		<div class="teams form-horizontal well">
		<?php echo $this->Form->create('Team', array('inputDefaults' => Configure::read('inputDefaults')));?>
			<fieldset>
				<legend><?php echo __('Add Team'); ?></legend>
				<?php
				echo $this->Form->input('name');
				echo $this->Form->input('Person');
				?>
				<div class="form-actions">
					<input type="submit" value="Submit" class="btn btn-primary" />
				</div>
			</fieldset>
		<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

