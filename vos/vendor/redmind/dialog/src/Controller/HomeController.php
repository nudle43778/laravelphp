<?php
    namespace RedMind\Dialog\Controller;
    
    class HomeController extends \Modernways\Mvc\Controller
    {
        public function index()
        {
            $model = "Het beste MVC framework ter wereld!";
            return $this->view();
        }
        
        
    }
