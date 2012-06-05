<div class="row-fluid">
	<div class="span3 hidden-phone">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li><?php echo $this->Html->link(__('New Committee'), array('action' => 'add')); ?></li>
				<li class="nav-header">Related Actions</li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	
			</ul>
		</div>
	</div>

	<div class="committees index span9">
		<h2><?php echo __('Committees');?></h2>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
									<th><?php echo $this->Paginator->sort('id');?></th>
									<th><?php echo $this->Paginator->sort('name');?></th>
									<th><?php echo $this->Paginator->sort('head');?></th>
									<th class="actions"><?php echo __('Actions');?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($committees as $committee): ?>
	<tr>
		<td><?php echo h($committee['Committee']['id']); ?>&nbsp;</td>
		<td><?php echo h($committee['Committee']['name']); ?>&nbsp;</td>
		<td><?php echo h($committee['Committee']['head']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $committee['Committee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $committee['Committee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $committee['Committee']['id']), null, __('Are you sure you want to delete # %s?', $committee['Committee']['id'])); ?>
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
