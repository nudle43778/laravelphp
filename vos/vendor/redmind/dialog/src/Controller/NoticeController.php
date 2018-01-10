<?php
    namespace RedMind\Dialog\Controller;
    class NoticeController extends \ModernWays\Mvc\Controller
    {
        private $viewDir="vendor/redmind/dialog/src/View/Notice";
        private $modelDir="vendor/redmind/dialog/src/Model/Notice";
        public function Index(){
            return $this->view();
        }
        
        
        
        // public function ReadingOne(){
        //     return $this->view();
        // }
        // // Post
        // public function ReadOne(){
        //     $id=$_POST['id'];
        //     $dal=new \RedMind\Dialog\DAL\Notice();
        //     $data=$dal->readOne($id);
        //     $model=new \RedMind\Dialog\Model\Notice();
        //     $model->setId(intval($data['Id']));
        //     $model->setSubject($data['Subject']);
        //     $model->setMessage($data['Message']);
        //     $model->setStart($data['Start']);
        //     $model->setEnd($data['End']);
        //     $model->setCode($data['Code']);
        //     $model->setSource($data['Source']);
        //     $view =function() use($model){
        //         include("$this->viewDir/ReadOne.php");
        //     };
        //     return $view;
        // }
                public function insert() {
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
        public function inserting(){
             $view = function () {
                 include("vendor/redmind/dialog/src/View/Notice/Inserting.php");
             };
             return $view;
         }
     }
            
    