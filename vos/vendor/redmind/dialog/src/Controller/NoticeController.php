<?php
    namespace RedMind\Dialog\Controller;
    class NoticeController
    {
        public function index()
        {
            // view maakt geen gebruik van model
            // dus geen nood aan closure
            $view = function () {
                include("vendor/redmind/dialog/src/View/Notice/Index.php");
            };
            return $view;
        }
    }