<?php
    namespace app\Controller;
    use app\Controller\AppController;
    use Cake\Routing\Router;

    
    class PostsController extends AppController
    {
        public function index()
        {
            $message = 'Welcome to CakePHP Image Upload';
            $this->set(['message' => $message]);
        }
    }




