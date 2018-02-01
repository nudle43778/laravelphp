<?php
namespace RedMind\Dialog\Model;
// automatische document generator zoals de drie backslashes in c#
    /** 
    * Notice Interface.
    * @lastmodified 13/12/2017 
    * @since 13/12/2017            
    * @author Citrah      
    * @version 0.1 
    */  
    Interface INotice {
        function setStart($value);
        function setEnd($value);
        function setCode($value);
        function setSubject($value);
        function setMessage($value);
        
        function getStart();
        function getEnd();
        function getCode();
        function getSubject();
        function getMessage();
    }
?>