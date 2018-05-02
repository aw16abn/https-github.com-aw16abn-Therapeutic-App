


<h1><?php echo h ($item['Item'] ['title']); ?> (<?php echo h ($item['Item'] ['creator']); ?>)</h1>
<p>Description: <?php echo ($item ['Item'] ['description']); ?>;</p>
<p> Category: <?php echo h ($item['Category']['name']); ?></p>
<p> Price: <?php echo h ($item['Item']['price']); ?></p>
<?php echo $this->Html->Image('../files/item/photo/' . $item['Item']['photo_dir'] . '/' . $item['Item']['photo']); ?>
