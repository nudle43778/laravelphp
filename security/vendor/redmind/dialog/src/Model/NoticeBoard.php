<?php 
namespace RedMind\Dialog\Model;

    /** 
    * NoticeBoard class 
    * @lastmodified 13/12/2017 
    * @since 13/12/2017             
    * @author Citrah        
    * @version 0.1 
    */  
    class NoticeBoard implements INoticeBoard {
        private $title;
        private $board = array();
        // private $notice;
        
        public function setTitle($value) {
            $this->title = $value;
        }
        
        public function getTitle() {
            return $this->title;
        }
        
        public function pin(INotice $notice) {
            $this->board[] = clone $notice;
        }
        
        public function unpin() {
        }
        
        public function getBoard() {
            return $this->board;
        }
    }
        