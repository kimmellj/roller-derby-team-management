<div class="row-fluid">
    <div class="span3 hidden-phone">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Actions</li>
                <li><?php echo "<?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?>";?></li>
                <li class="nav-header">Related Actions</li>
<?php
    $done = array();
    foreach ($associations as $type => $data) {
        foreach ($data as $alias => $details) {
            if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                echo "                <li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                echo "                <li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                $done[] = $details['controller'];
            }
        }
    }
?>
    
            </ul>
        </div>
    </div>

    <div class="<?php echo $pluralVar;?> index span9">
        <h2><?php echo "<?php echo __('{$pluralHumanName}');?>";?></h2>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
<?php  foreach ($fields as $field):?>
                    <th><?php echo "<?php echo \$this->Paginator->sort('{$field}');?>";?></th>
<?php endforeach;?>
                    <th class="actions"><?php echo "<?php echo __('Actions');?>";?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo "<?php
                foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
                echo "                    <tr>\n";
                    foreach ($fields as $field) {
                        $isKey = false;
                        if (!empty($associations['belongsTo'])) {
                            foreach ($associations['belongsTo'] as $alias => $details) {
                                if ($field === $details['foreignKey']) {
                                    $isKey = true;
                                    echo "                        <td>\n            <?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n        </td>\n";
                                    break;
                                }
                            }
                        }
                        if ($isKey !== true) {
                            echo "                        <td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
                        }
                    }
            
                    echo "                        <td class=\"actions\" nowrap=\"nowrap\">\n";
                    echo "                            <?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-info')); ?>\n";
                    echo "                            <?php echo \$this->Html->link(__('Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-warning')); ?>\n";
                    echo "                            <?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                    echo "                        </td>\n";
                echo "                    </tr>\n";
            
                echo "                <?php endforeach; ?>\n";
                ?>
            </tbody>
        </table>
        <p>
        <?php echo "<?php
        echo \$this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>";?>
        </p>
        
        <div class="pagination">
            <ul>
                <?php
                    echo "<?php\n";
                    echo "        echo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
                    echo "        echo \$this->Paginator->numbers(array('separator' => '</li><li>'));\n";
                    echo "        echo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
                    echo "    ?>\n";
                ?>
            </ul>
        </div>
    </div>
</div>
