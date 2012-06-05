<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List People'), array('action' => 'index'));?></li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List Committees'), array('controller' => 'committees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Committee'), array('controller' => 'committees', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	
	<div class="span9">
		
		<div class="people form-horizontal well">
		<?php echo $this->Form->create('Person', array('inputDefaults' => Configure::read('inputDefaults')));?>
			<fieldset>
				<legend><?php echo __('Edit Person'); ?></legend>
				<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				echo $this->Form->input('real_name');
				echo $this->Form->input('address');
				echo $this->Form->input('city');
				echo $this->Form->input('state');
				echo $this->Form->input('zip');
				echo $this->Form->input('email');
				echo $this->Form->input('insurance_number');
				echo $this->Form->input('phone');
				echo $this->Form->input('emergency_contact_name');
				echo $this->Form->input('emergency_contact_number');
				echo $this->Form->input('Committee');
				echo $this->Form->input('Team');
				?>
				<div class="form-actions">
					<input type="submit" value="Submit" class="btn btn-primary" />
				</div>
			</fieldset>
		<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

