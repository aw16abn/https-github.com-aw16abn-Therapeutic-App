<?php

 
  
 App::uses('AppController', 'Controller');
    

    
    class PostsController extends AppController
    {
        public function index()
        {
            $message = 'Welcome to CakePHP Image Upload';
            $this->set(['message' => $message]);
        }
    }




