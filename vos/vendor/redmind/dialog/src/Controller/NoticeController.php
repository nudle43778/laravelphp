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
        
        public function Inserting(){
            $view = function () {
                include("vendor/redmind/dialog/src/View/Notice/Inserting.php");
            };
            return $view;
        }
        
        public function Insert() {
            // model updaten gebaseerd op nieuwe input van de view
            $model = new \RedMind\Dialog\Model\Notice();
            $model->setSubject(filter_input(INPUT_POST, 'Subject', FILTER_SANITIZE_STRING));
            $model->setCode(filter_input(INPUT_POST, 'Code', FILTER_SANITIZE_STRING));
            $model->setMessage(filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_STRING));
            $model->setStart(filter_input(INPUT_POST, 'Start', FILTER_SANITIZE_STRING));
            $model->setEnd(filter_input(INPUT_POST, 'End', FILTER_SANITIZE_STRING));
            $model->setSource(filter_input(INPUT_POST, 'Source', FILTER_SANITIZE_STRING));
            // insert into table
            $dal = new \RedMind\Dialog\Dal\Notice();
            $dal->setModel($model);
            $dal->insert();
            
            $view = function () {
                include("vendor/redmind/dialog/src/View/Notice/Index.php");
            };
            return $view;
        }
    }
