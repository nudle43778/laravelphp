<?php 
    namespace RedMind\Dialog\Controller;
    class Home
    {
        public function index()
        {
            $model;
            $view = function ($model) {
                include("vendor/redmind/dialog/src/View/Home/Index.php");
            }
        }
    }