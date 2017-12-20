<?php
namespace RedMind\Dialog\Model;

/**
 * Notice klasse
 * @lastmodified 13/12/2017
 * @since 13/12/2017
 * @author Citrah
 * @version 0.1
 */
class Notice implements INotice {
    private $start;
    private $end;
    private $code;
    private $subject;
    private $message;
    private $source;

    public function setStart($value) {
        $this->start = $value;
    }
    public function setEnd($value) {
        $this->end = $value;
    }
    public function setCode($value) {
        $this->code = $value;
    }
    public function setSubject($value) {
        $this->subject = $value;
    }
    public function setMessage($value) {
        $this->message = $value;
    }
    public function setSource($value){
        $this->source = $value;   
    }

    public function getStart() {
        return $this->start;
    }
    public function getEnd(){
        return $this->end;
    }
    public function getCode() {
        return $this->code;
    }

    public  function getSubject() {
        return $this->subject;
    }
    public function getMessage(){
        return $this->message;
    }
    public function getSource(){
        return $this->source;   
    }
}