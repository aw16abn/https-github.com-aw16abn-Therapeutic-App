<h1>List of <?php echo $count?> catalog Items</h1>

 
<?php echo $this->Html->link('Add item', array('Controller' => 'items', 'action' =>'add')); ?>
<table>
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Creator</th>
        <th>Action</th>
        <th>Photo</th>
        
       
    </tr>
    
    
        


    
    <?php foreach ($items as $item): ?>
    
    <tr>
        <td><?php echo h ($item['Item'] ['id']); ?></td>
        <td>
            <?php echo $this->Html->link($item['Item'] ['title'],
                    array('controller' => 'items', 'action' => 'view', $item['Item'] ['id'])); ?>
        </td>
        <td><?php echo h ($item['Item'] ['creator']); ?></td>
       
        
        <td>
            <?php echo $this->Html->link('Edit', array('action' =>'edit', $item['Item'] ['id'])); ?> |
        
            <?php echo $this->Form->postLink('Delete', 
                    array('action' =>'delete', $item['Item'] ['id']),
                    array('Confirm' =>'Are you sure you want to delete the item, '.$item['Item'] ['title'] ));
            ?>
        </td>
        
        <td>
          <!--<?php echo $this->Html->link('../files/example/image/' . $entity->photo_dir . '/' . $entity->photo); ?> -->
            
            <?php
$exampleData = [
'Example' => [
'image' => 'imageFile.jpg',
'dir' => '7'
]
];
echo $this->Html->Image('../files/item/photo/' . $item['Item']['photo_dir'] . '/' . $item['Item']['photo']);
?>

        </td>
         
    </tr>
   

    
    <?php endforeach; ?>
    <?php unset($item); ?>
    
</table>
