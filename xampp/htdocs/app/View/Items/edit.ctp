<h1>Edit Item</h1>

<?php 
    echo $this->Form->create('Item', array('type' => 'file'));
    echo $this->Form->input('Item.title');
    echo $this->Form->input('Item.creator');
    echo $this->Form->input('Item.price');
    echo $this->Form->input('Item.description', ['rows' => '5']);
    echo $this->Form->input('Item.photo', array('type' => 'file'));
    echo $this->Form->input('Item.photo_dir', array('type' => 'hidden'));
    echo $this->Form->end('Update Item');
    
