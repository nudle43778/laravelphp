<?php
namespace ModernWays\Dialog\Model;
/**
* Logbook class.
* This class logs feedback objects
* @lastmodified 17/01/2015
* @since 25/8/2014          
* @author Entreprise de Modes et de Manieres Modernes - e3M       
* @version 0.1
*/    
class NoticeBoard extends Notice implements INoticeBoard
{
    private $board = array();
    private $title;

    public function __construct()
    {
        $this->Start('none');
        $this->title = 'Log';
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getBoard()
    {
        return $this->board;
    }

    // return one entry in the log based in the name
    public function getNotice($name)
    {
        return $this->board[$name];
            
    }

    public function log()
    {
        $this->push($this->copy());
        $this->reset();
    }

    public function push(\ModernWays\Dialog\Model\Notice $noticeObject)
    {
        // haal de naam eruit want die wil ik
        // als string index gebruiken voor 
        // de book array
        // naam is niet hooflettergevoelig
        // geef een volgnummer gescheiden door -
        $name = count($this->board) . '-' . $noticeObject->getName();
        $this->board[$name] = $noticeObject;
    }

    public function delete($name)
    {
        $entry = $this->get($name);
        // unset is of type void
        unset($this->board[$name]);
        return $entry;
    }

    public function clear() 
    {
        $this->board = array();
    }

    public function append($value)
    {
        if (count($this->board) == 0)
        {
            $this->board = $value;
        }
        else
        {
            $this->board = array_merge($this->board, $value);
        }
    }

    public function end()
    {
        $this->setEndTime();
        $this->log();
    }

}


