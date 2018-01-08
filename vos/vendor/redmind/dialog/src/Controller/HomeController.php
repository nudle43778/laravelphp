<?php
    namespace RedMind\Dialog\Controller;
    
    use index;
    
    class HomeController extends \Modernways\Mvc\Controller
    {
        public function index()
        {
            $model = "Het beste MVC framework ter wereld!";
            return $this->view();
        }
        
        
    }
