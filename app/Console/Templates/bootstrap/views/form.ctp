<div class="row-fluid">
	<div class="span3">
		<div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
		<?php if (strpos($action, 'add') === false): ?>
		<li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>";?></li>
		<?php endif;?>
		<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index'));?>";?></li>
				<li class="nav-header">Related Actions</li>
<?php
				$done = array();
				foreach ($associations as $type => $data) {
					foreach ($data as $alias => $details) {
						if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
							echo "\t\t\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
							echo "\t\t\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
							$done[] = $details['controller'];
						}
					}
				}
		?>
			</ul>
		</div>
	</div>
	
	<div class="span9">
		
		<div class="<?php echo $pluralVar;?> form-horizontal well">
		<?php echo "<?php echo \$this->Form->create('{$modelClass}', array('inputDefaults' => Configure::read('inputDefaults')));?>\n";?>
			<fieldset>
				<legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
		<?php
				echo "\t\t<?php\n";
				foreach ($fields as $field) {
					if (strpos($action, 'add') !== false && $field == $primaryKey) {
						continue;
					} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
						echo "\t\t\t\techo \$this->Form->input('{$field}');\n";
					}
				}
				if (!empty($associations['hasAndBelongsToMany'])) {
					foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
						echo "\t\t\t\techo \$this->Form->input('{$assocName}');\n";
					}
				}
				echo "\t\t\t\t?>\n";
		?>
				<div class="form-actions">
					<input type="submit" value="Submit" class="btn btn-primary" />
				</div>
			</fieldset>
		<?php
			echo "<?php echo \$this->Form->end();?>\n";
		?>
		</div>
	</div>
</div>

