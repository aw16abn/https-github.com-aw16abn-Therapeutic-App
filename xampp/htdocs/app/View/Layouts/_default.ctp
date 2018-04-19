<?php
/**
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$this->Html->css('cake.generic');

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    
       <div id ="navigation">
                <ul id="nav">
                    <li><a href="/" style="color: white;">Home</a></li>
                     <li><a href="app/view/pages/gallery.ctp" style="color: white;">Gallery</a></li>
                      <li><a href="app/view/pages/upload.ctp" style="color: white;">Upload</a></li>         
                      <li><?php $this->html->link('Upload', array ('controller' => 'pages', 'action' => 'display', 'upload'))?></li>
                      <li><a href="#" style="color: white;">Login</a></li>
                      <li><a href="items" style="color: white;">Content</a></li>
                      <li><a href="#" style="color: white;">Information</a></li>
                </ul>
                
            </div>
             
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'https://cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
