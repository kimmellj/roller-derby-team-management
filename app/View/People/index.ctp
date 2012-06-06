<div class="row-fluid">
    <div class="span3 hidden-phone">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Actions</li>
                <li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
                <li class="nav-header">Related Actions</li>
                <li><?php echo $this->Html->link(__('List Committees'), array('controller' => 'committees', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Committee'), array('controller' => 'committees', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
    
            </ul>
        </div>
    </div>

    <div class="people index span9">
        <h2><?php echo __('People');?></h2>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('name');?></th>
                    <th><?php echo $this->Paginator->sort('real_name');?></th>
                    <th><?php echo $this->Paginator->sort('email');?></th>
                    <th><?php echo $this->Paginator->sort('phone');?></th>
                    <th class="actions"><?php echo __('Actions');?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($people as $person): ?>
                    <tr>
                        <td><?php echo h($person['Person']['name']); ?>&nbsp;</td>
                        <td><?php echo h($person['Person']['real_name']); ?>&nbsp;</td>
                        <td><?php echo h($person['Person']['email']); ?>&nbsp;</td>
                        <td><?php echo h($person['Person']['phone']); ?>&nbsp;</td>
                        <td class="actions" nowrap="nowrap">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id']), array('class' => 'btn btn-info')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-warning')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
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
        ?>        </p>
        
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
