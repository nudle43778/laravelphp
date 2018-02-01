<?php
namespace ModernWays\Identity;
class Session implements ISession
{
    protected $name;
    protected $https;
    // if true, this stops JavaScript being able to access the session id.
    protected $httpOnly;
    protected $salt;

    protected $noticeboard;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function isHttps()
    {
        return $this->https;
    }

    /**
     * @param boolean $https
     */
    public function setHttps($https)
    {
        $this->https = $https;
    }

    public function __construct(\RedMind\Dialog\Model\INoticeBoard $noticeBoard,
                                $name = 'ModernWays', $https = FALSE)
    {
        $this->name = $name;
        $this->https = $https;
        $this->salt = 'En mijn oom staat op de bergen, hali, halo.';
        $this->noticeboard = $noticeBoard;
        // This stops JavaScript being able to access the session id.
        $this->httpOnly = true;
    }

    function __destruct()
    {
    }

    public function start()
    {
        $this->noticeboard->startTimeInKey('start session');
        if (session_status() === PHP_SESSION_NONE) {
            // Forces sessions to only use cookies.
            if (ini_set('session.use_only_cookies', 1) === FALSE) {
                echo 'Could not initiate a safe session (ini_set)';
                exit();
            }
            // Gets current cookies params.
            $cookieParams = session_get_cookie_params();
            // specifies the lifetime of the cookie in seconds which is sent to the browser.
            // The value 0 means "until the browser is closed." Defaults to 0.
            session_set_cookie_params($cookieParams["lifetime"],
                $cookieParams["path"],
                $cookieParams["domain"],
                $this->https,
                $this->httpOnly);
            // Sets the session name to the one set above.
            session_name($this->name);
            // session_save_path('d:\bin\temp');
            session_start(); // Start the php session
            $_SESSION['generated'] = time();
            // $this->regenerate();
            $text = $this->https ? 'secured' : 'insecure';
            $this->noticeboard->setText("$text session started ");
            $this->noticeboard->log();
        } else {
            $text = $this->https ? 'secured' : 'insecure';
            $this->noticeboard->setText("{$text} {$this->name} session already started ");
            $this->noticeboard->log();
            $this->regenerate(true);
        }
    }

    function isStarted()
    {
        if (session_status() === PHP_SESSION_NONE) {
            return false;
        }
        return true;
    }

    public function makeTicket($value)
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        // hash the password with the unique salt.
        // XSS protection as we might print this value
        // session stays for one week valid
        return hash('sha512', $this->salt . $value . $userAgent);
    }

    public function isTicketSet()
    {
        if (isset($_SESSION['t'])) {
            return true;
        }
        return false;
    }

    public function setTicket($value)
    {
        $_SESSION['t'] = $this->makeTicket($value);
    }

    public function isValidTicket($value)
    {
        $this->noticeboard->startTimeInKey('start session');
        $text = $this->https ? 'secured' : 'insecure';
        if (isset($_SESSION['t'])) {
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $ticket = $_SESSION['t'];
            // session stays for one week valid
            if ($ticket == hash('sha512', $this->salt . $value . $userAgent)) {
                $this->noticeboard->setText("{$text} {$this->name} session ticket validated.");
                $this->noticeboard->log();
                return true;
            }
        }
        $this->noticeboard->setText("{$text} {$this->name} session ticket not validated. ");
        $this->noticeboard->log();
        return false;
    }

    public function setPositiveInteger($key, $value)
    {
        // XSS protection as we might print this value
        $_SESSION[$key] = preg_replace("/[^0-9]+/", "", $value);
    }

    public function setText($key, $value)
    {
        // XSS protection as we might print this value
        $_SESSION[$key] = preg_replace("/[^a-zA-Z0-9_ \-]+/", "", $value);
    }

    public function set($key, $value)
    {
        if (isset($_SESSION)) {
            $_SESSION[$key] = $value;
        }
    }

    public function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return FALSE;
    }

    public function regenerate($deleteOldSession = true)
    {
        $this->noticeboard->startTimeInKey('regenerate session');
        $text = $this->https ? 'secured' : 'insecure';
        if (!isset($_SESSION['generated']) || $_SESSION['generated'] < (time() - 20)) {
            // true will delete old session
            session_regenerate_id($deleteOldSession);
            $_SESSION['generated'] = time();
            $this->noticeboard->setText("{$text} {$this->name} session regenerated.");
        } else {
            $this->noticeboard->setText("{$text} {$this->name} session not regenerated.");
        }
       $this->noticeboard->log();
    }

    public function end()
    {
        // session is started in the constructor
        $this->noticeboard->startTimeInKey('end session');
        $text = $this->https ? 'secured' : 'insecure';
        $this->noticeboard->setDebugInfo();

        // Unset all session values
        $_SESSION = array();
        // get session parameters
        $params = session_get_cookie_params();
        // Delete the actual cookie.
        setcookie(session_name(), '', time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']);
        // Destroy session
        session_destroy();
        $this->noticeboard->setText("{$text} {$this->name} session ended.");
        $this->noticeboard->log();
    }
}


