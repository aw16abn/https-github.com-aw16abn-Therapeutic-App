
<?php 



class Item extends AppModel {
    public $belongsTo = 'Category';
    
    public $actsAs = array(
'Upload.Upload' => array(
'photo' => array(
    


'fields' => array(
'dir' => 'photo_dir',
    
'thumbnailSizes' => array(
'xvga' => '1024x768',
'vga' => '640x480',
'thumb' => '80x80'

)
 )   
)
    )
);
}
?>



  
   
}



