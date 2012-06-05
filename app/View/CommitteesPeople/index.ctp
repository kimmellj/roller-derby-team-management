<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('New Committees Person'), array('action' => 'add')); ?></li>
				<li class="nav-header">Related Actions</li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	
			</ul>
		</div>
	</div>

	<div class="committeesPeople index span9">
		<h2><?php echo __('Committees People');?></h2>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
									<th><?php echo $this->Paginator->sort('id');?></th>
									<th><?php echo $this->Paginator->sort('committee_id');?></th>
									<th><?php echo $this->Paginator->sort('person_id');?></th>
									<th class="actions"><?php echo __('Actions');?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($committeesPeople as $committeesPerson): ?>
	<tr>
		<td><?php echo h($committeesPerson['CommitteesPerson']['id']); ?>&nbsp;</td>
		<td><?php echo h($committeesPerson['CommitteesPerson']['committee_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($committeesPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $committeesPerson['Person']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $committeesPerson['CommitteesPerson']['committee_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $committeesPerson['CommitteesPerson']['committee_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $committeesPerson['CommitteesPerson']['committee_id']), null, __('Are you sure you want to delete # %s?', $committeesPerson['CommitteesPerson']['committee_id'])); ?>
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
