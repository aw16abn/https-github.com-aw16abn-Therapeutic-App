<h1>Edit Item</h1>

<?php 
    echo $this->Form->create('Item',['type'=>'file']);
    echo $this->Form->input('title');
    echo $this->Form->input('creator');
    echo $this->Form->input('price');
    echo $this->Form->input('description', array('rows' => '5'));
    echo $this->Form->input('id', array('type'=>'hidden'));
    echo $this->Form->input('category_id');
    echo $this->Form->input('item_image' ,['type' => 'file']);
    echo $this->Form->end('Update Item');
    
