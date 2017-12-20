<?php
    namespace RedMind\Dialog\Controller;
    class HomeController
    {
        public function index()
        {
            $model = "Het beste MVC framework ter wereld!";
            $view = function () use ($model) {
                include("vendor/redmind/dialog/src/View/Home/Index.php");
            };
            return $view;
        }
    }