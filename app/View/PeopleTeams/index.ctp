<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('New People Team'), array('action' => 'add')); ?></li>
				<li class="nav-header">Related Actions</li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	
			</ul>
		</div>
	</div>

	<div class="peopleTeams index span9">
		<h2><?php echo __('People Teams');?></h2>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
									<th><?php echo $this->Paginator->sort('id');?></th>
									<th><?php echo $this->Paginator->sort('person_id');?></th>
									<th><?php echo $this->Paginator->sort('team_id');?></th>
									<th><?php echo $this->Paginator->sort('active');?></th>
									<th><?php echo $this->Paginator->sort('eligible');?></th>
									<th class="actions"><?php echo __('Actions');?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($peopleTeams as $peopleTeam): ?>
	<tr>
		<td><?php echo h($peopleTeam['PeopleTeam']['id']); ?>&nbsp;</td>
		<td><?php echo h($peopleTeam['PeopleTeam']['person_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($peopleTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $peopleTeam['Team']['id'])); ?>
		</td>
		<td><?php echo h($peopleTeam['PeopleTeam']['active']); ?>&nbsp;</td>
		<td><?php echo h($peopleTeam['PeopleTeam']['eligible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $peopleTeam['PeopleTeam']['person_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $peopleTeam['PeopleTeam']['person_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $peopleTeam['PeopleTeam']['person_id']), null, __('Are you sure you want to delete # %s?', $peopleTeam['PeopleTeam']['person_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
			</tbody>
		</table>
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>		</p>
		
		<div class="pagination">
			<ul>
				<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => '</li><li>'));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
			</ul>
		</div>
	</div>
</div>
