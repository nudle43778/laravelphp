<?php 
namespace RedMind\Dialog\Model;

    /** 
    * NoticeBoard Interface 
    * @lastmodified 13/12/2017 
    * @since 13/12/2017             
    * @author Citrah       
    * @version 0.1 
    */  
    Interface INoticeBoard {
        function setTitle($value);
        function getTitle();
        
        function pin(INotice $notice);
        function unpin();
        function getBoard();
    }
        