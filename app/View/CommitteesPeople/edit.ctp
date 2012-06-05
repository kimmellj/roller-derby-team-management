<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommitteesPerson.committee_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CommitteesPerson.committee_id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Committees People'), array('action' => 'index'));?></li>
				<li class="nav-header">Related Actions</li>
				<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	
	<div class="span9">
		
		<div class="committeesPeople form-horizontal well">
		<?php echo $this->Form->create('CommitteesPerson', array('inputDefaults' => Configure::read('inputDefaults')));?>
			<fieldset>
				<legend><?php echo __('Edit Committees Person'); ?></legend>
				<?php
				echo $this->Form->input('id');
				echo $this->Form->input('committee_id');
				echo $this->Form->input('person_id');
				?>
				<div class="form-actions">
					<input type="submit" value="Submit" class="btn btn-primary" />
				</div>
			</fieldset>
		<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

