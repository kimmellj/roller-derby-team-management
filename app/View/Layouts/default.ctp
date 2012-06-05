<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IMRG Team Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <?php echo $this->Html->css('bootstrap.css'); ?>

    <!--[if lt IE 9]>
      <?php echo $this->Html->script('http://html5shim.googlecode.com/svn/trunk/html5.js'); ?>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">IMRG Team Management</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active dropdown">
				<?php echo $this->Html->link('People', array('controller' => 'people', 'action' => 'index')); ?>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link('List People', array('controller' => 'people', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('Add Person', array('controller' => 'people', 'action' => 'add')); ?></li>
				</ul>
			  </li>
              <li><?php echo $this->Html->link('Teams', array('controller' => 'teams', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link('Committees', array('controller' => 'committees', 'action' => 'index')); ?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
			<?php echo $this->element('sql_dump'); ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo $this->Html->script('jquery.js'); ?>
    <?php echo $this->Html->script('bootstrap-transition.js'); ?>
    <?php echo $this->Html->script('bootstrap-alert.js'); ?>
    <?php echo $this->Html->script('bootstrap-modal.js'); ?>
    <?php echo $this->Html->script('bootstrap-dropdown.js'); ?>
    <?php echo $this->Html->script('bootstrap-scrollspy.js'); ?>
    <?php echo $this->Html->script('bootstrap-tab.js'); ?>
    <?php echo $this->Html->script('bootstrap-tooltip.js'); ?>
    <?php echo $this->Html->script('bootstrap-popover.js'); ?>
    <?php echo $this->Html->script('bootstrap-button.js'); ?>
    <?php echo $this->Html->script('bootstrap-collapse.js'); ?>
    <?php echo $this->Html->script('bootstrap-carousel.js'); ?>
    <?php echo $this->Html->script('bootstrap-typeahead.js'); ?>

  </body>
</html>

