<?php
/**
 * Created by PhpStorm.
 * User: Jef Inghelbrecht
 * Date: 3/02/2016
 * Time: 10:37
 */
namespace ModernWays\Dialog\Model;

interface INoticeBoard extends \ModernWays\Dialog\Model\INotice
{
    function getTitle();

    function setTitle($title);

    function getBoard();

    function getNotice($name);

    function log();

    function push(\ModernWays\Dialog\Model\Notice $noticeObject);

    function delete($name);

    function clear();

    function append($value);

    function end();
}
