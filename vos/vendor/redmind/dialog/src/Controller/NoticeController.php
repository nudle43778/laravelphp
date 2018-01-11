<?php
    namespace RedMind\Dialog\Controller;
    class NoticeController extends \ModernWays\Mvc\Controller
    {
        private $viewDir="vendor/redmind/dialog/src/View/Notice";
        private $modelDir="vendor/redmind/dialog/src/Model/Notice";
        public function Index(){
            return $this->view();
        }
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
         
        public function readingAll() {
                $dal = new \RedMind\Dialog\Dal\Notice();
                $notice = new \RedMind\Dialog\Model\Notice();
                $noticeBoard = new\RedMind\Dialog\Model\NoticeBoard();
                
                $dal->setNotice($notice);
                $dal->setNoticeBoard($noticeBoard);
                $dal->readingAll();
                return $this->view($dal->getNoticeBoard(), "Notice/ReadingAll");
        }
        
        public function readingOne($id) {
                $dal = new \RedMind\Dialog\Dal\Notice();
                $notice = new \RedMind\Dialog\Model\Notice();
                $notice->setId($id);
                $dal->setNotice($notice);
                $dal->readingOne();
                return $this->view($notice);        
            
        }
     }
            
    