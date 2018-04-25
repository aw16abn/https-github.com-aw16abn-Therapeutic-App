<?php

use App\View\Helper\ImageHelper;

class ItemsController extends AppController {
    
    public $components = array('Session');
    
    public function delete($id = null)
    {
        $this->Item->id = $id;
             if (!$id || !$this->Item->exists())
        {
            throw new NotFoundException("ID was not set.");
        }
        
        if ($this->request->is('post'))
        {
          if(  $this->Item->delete())
          {
              $this->Session->setFlash('The item was deleted');
          }
          else
          {
              $this->Session->setFlash('The item was not deleted');
          }
        }
        $this->redirect('index');
    }
    
    public function edit($id=null)
    {
           if (!$id)
        {
            throw new NotFoundException("ID was not set.");
        }
        $data = $this->Item->findById($id);
        
        if (!$data)
        {
        throw new NotFoundException("ID was not in the database.");
        }
        
        
        if ($this->request->is('post') || $this->request->is('put'))
        {
             //controller to handle file upload.
            
            
           if ( $this->Item->save($this->request->data))
           {
               $this->Session->setFlash(__('The item was updated.'));
               $this->redirect('index');
           }
           else
           {
               $this->Session->setFlash(__('The item was not updated.'));
           }
        }
        
        $this->request->data = $data;
        
        
    }
    
    public function add()
    {
        
        
        if ($this->request->is('post')) 
        {
  
           $this->Item->create();
           if ( $this->Item->save($this->request->data))
           {
              $this->redirect('index');
           }
           else
           {
               //if the data fails to save this should do something
           }
        }
           
    }
                
           
    
    
    public function view($id = null){
        
        //$this->layout = '_default';
        
        if (!$id)
        {
            throw new NotFoundException("ID was not set.");
        }
        $data = $this->Item->findById($id);
        
        if (!$data)
        {
        throw new NotFoundException("ID was not in the database.");
        }
        $this->set('item', $data);
    }
    
    public function index() 
    {
        $data = $this->Item->find('all', array('order'=> 'title'));
        $count= $this->Item->find('count');
        
        $info= array (
            'items' =>$data,
            'count' =>$count
        );
        
        $this->set($info);
         
       // $this->set('items', $data);
       // $this->set('count', $count);
        
       // $this->set('color', 'blue');
        
        
    }
    
    public function search($search=null)
    {
        if (!$search)
        {
            $data = $this->Item->find('all', array('order'=> 'year'));
        }
        else
        {
            $data = $this->Item->find('all', array('order'=> 'year',
                'conditions' => array('title Like'=>'%'.$search.'%')
                ));
            
            //WHERE title LIKE '% $search %'
        }
           
        //$count= $this->Item->find('count');
        
        $info= array (
            'items' =>$data,
            'count' =>count($data)
        );
        
        $this->set($info);
        
        $this->render('index');
    }
    
   
    
}

