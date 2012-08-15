<div class="row-fluid">
    <div class="span3 hidden-phone">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Actions</li>
                <li><?php echo $this->Html->link(__('New Product Option'), array('action' => 'add')); ?></li>
                <li class="nav-header">Related Actions</li>
                <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
    
            </ul>
        </div>
    </div>

    <div class="productOptions index span9">
        <h2><?php echo __('Product Options');?></h2>
        <form class="form-inline" action="<?php echo $this->Html->url(array('action' => 'index')); ?>" method="post">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('product_id');?></th>
                        <th><?php echo $this->Paginator->sort('name');?></th>
                        <th><?php echo $this->Paginator->sort('qty');?></th>
                        <th><?php echo $this->Paginator->sort('cost');?></th>
                        <th><?php echo $this->Paginator->sort('retail');?></th>
                        
                        <th class="actions"><?php echo __('Actions');?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($productOptions as $productOption): ?>
                        <tr>
                            <td><?php echo $this->Html->link($productOption['Product']['name'], array('controller' => 'products', 'action' => 'view', $productOption['Product']['id'])); ?></td>
                            <td><?php echo h($productOption['ProductOption']['name']); ?>&nbsp;</td>
                            <td>
                                <input type="hidden" name="data[<?php echo $i; ?>][ProductOption][id]" value="<?php echo $productOption['ProductOption']['id']; ?>" />
                                <input type="text" class="input-small" name="data[<?php echo $i; ?>][ProductOption][qty]" value="<?php echo $productOption['ProductOption']['qty']; ?>" />&nbsp;
                            </td>
                            <td><?php echo h($productOption['ProductOption']['cost']); ?>&nbsp;</td>
                            <td><?php echo h($productOption['ProductOption']['retail']); ?>&nbsp;</td>                        
                            <td class="actions" nowrap="nowrap">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $productOption['ProductOption']['id']), array('class' => 'btn btn-info')); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productOption['ProductOption']['id']), array('class' => 'btn btn-warning')); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productOption['ProductOption']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $productOption['ProductOption']['id'])); ?>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn pull-right">Save Quantities</button>
        </form>
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
