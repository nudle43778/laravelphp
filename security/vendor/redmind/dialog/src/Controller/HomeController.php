<?php
    namespace RedMind\Dialog\Controller;
    class HomeController extends \ModernWays\Mvc\Controller
    {
            public function Index(){
                return $this->view($model);
            }
    }