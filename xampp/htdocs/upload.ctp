
<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
    </head>
    <body>
        
        <?php echo ("this is a test?")?>
        
        <div class="users form large-9 medium-8 columns content">
            <h1>CakePHP Upload File</h1>
            <div class="content">
                <?php echo $this->Flash->render();?>
                <div class="upload-form">
                    
                    <?php echo $this->Form->create($post, ['type' => 'file']);?>
                    
                    <?php echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control']);?>
                    
                    <?php echo $this->Form->button(__('Upload File'), ['type' => 'submit', 'class' => 'form-controlbtn btn-default']);?>
                    
                    <?php echo $this->Form->end()?>
                </div>
                
            </div>
        </div>
        
        
    </body>
    
    
    
</html>
<?php
include 'Template.php';
