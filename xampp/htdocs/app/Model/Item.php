
<?php 

class Item extends AppModel {
    public $belongsTo = 'Category';
    
    
    public function initialize(array $config)
   {
       $this->addBehaviour('Timestamp');
       
   }
}



