<?php
namespace ModernWays\Identity;

interface ISession
{
    function getName();

    function setName($name);

    function isHttps();

    function setHttps($https);

    function start();

    function makeTicket($value);

    function isTicketSet();

    function setTicket($value);

    function isValidTicket($value);

    function setPositiveInteger($key, $value);

    function setText($key, $value);

    function set($key, $value);

    function regenerate($deleteOldSession = true);

    function end();
}


