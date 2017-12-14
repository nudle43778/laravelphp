<?php
namespace ModernWays\Helpers;
/**
 * Logbook LogApp.
 * This class logs app system feed objects
 * @since 16/4/2015
 * @author Entreprise de Modes et de Manieres Modernes - e3M
 * @version 0.1
 */
class FeedbackLocale extends \ModernWays\Dialog\Feedback
{
    /* in PHP 5.6+ you can have const arrays - see Andrea Faulds' answer below.
    * You can also serialize your array and then put it into the constant:
    * # define constant, serialize array
    * define ("FRUITS", serialize (array ("apple", "cherry", "banana")));
    * # use it
    * $my_fruits = unserialize (FRUITS);
    */

    static $identitySignIn = ['si', '', ''];
    static $identitySignOut = ['so', '', ''];
    static $identityPasswordVerified = ['v', 'p', 'is'];
    static $identityPasswordNotVerified = ['v', 'p', 'not'];
    static $identityUserVerified = ['v', 'u', 'is'];
    static $identityUserNotVerified = ['v', 'u', 'not'];
    static $identityTicketVerified = ['v', 'u', 'is'];
    static $identityTicketNotVerified = ['v', 'u', 'not'];
    static $identityMaxLoginAttempts = ['fa', '', 'is'];
    static $identityNotMaxLoginAttempts = ['fa', '', 'not'];
    static $identitySignedIn = ['isi', '', 'is'];
    static $identityNotSignedIn = ['nsi', '', 'not'];

    const INVALIDINPUT_INSERT = 'i';
    const INVALIDINPUT_UPDATE = 'u';

    const CONNECTION_FAILED = 'f';
    const CONNECTION_OPENED = 'o';
    const CONNECTION_CLOSED = 'c';
    const CONNECTION_NOT_CONNECTED = 'nc';
    const CONNECTION_ESTABLISHED = 'e';

    const SESSION_ALREADY_STARTED = 'as';
    const SESSION_STARTED = 's';
    const SESSION_UNSAVE = 'u';
    const SESSION_REGENERATED = 'r';
    const SESSION_NOT_REGENERATED = 'nr';
    const SESSION_ENDED = 'e';
    const SESSION_TICKET_VALIDATED = 'tv';
    const SESSION_TICKET_INVALIDATED = 'ti';
    const SESSION_OPENED_IN_LOGIN = 'il';
    const SESSION_OPENED_OUTSIDE_LOGIN = 'ol';

    const CREATE = 'c';
    const UPDATE = 'u';
    const DELETE = 'd';
    const READ = 'r';
    const READALL = 'ra';
    const READBY = 'rb';

    const ID = 1;
    const QUANTITY = 2;

    protected $locale;
    protected $message;

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function __construct($locale = 'en_US')
    {
        $this->locale = $locale;
        $this->message['en_US'] =
            array(
                'CONNECTION' =>
                    "Connection with host {0} to {1} database {2, select, e {already exists} o {opened} c {closed} n {not connected} other {failed}}.",
                'SESSION' =>
                    "{0, select, s {Secured} other {Not secured}} session with name {1} {2, select, s {started} as {already started} u {not safe and not started (ini_set)} r {regenerated} nr {not regenerated} tv {ticket validated} ti {ticket invalidated} il {opened in login} ol {started outside Identity class} other {undefined}}",
                'IDENTITY' =>
                    "{0, select, v { {1, select, u {user} p {password} t {ticket} other {undefined}} {2, select, is {is} other {not}} verified} si {sign in} so {sign out} isi {{2, select, is {is} other {not}} signed in} nsi {{2, select, is {is} other {not}} signed in} fa {maximum failed login attempts {2, select, is {is} other {not}} reached} other {undefined}}",
                'VALIDATION' => array(
                    'REQUIRED' =>
                        "{0} is mandatory field",
                    'INVALIDINPUT' =>
                        "Invalid input data. Cannot {0, select, i {insert} u {update} other {undefined}}."),
                'SP' =>
                    "Error in stored procedure {0}",
                'CRUD' =>
                    "{2, select, 0 {Row } other {{3, select, 1  { Row with Id {2}} other {{2} row(s)}} } } {1, select, is {is} a {are} other {is not }} {0, select, c {inserted} u {updated} d {deleted} r {found} other {undefined}}");

        $this->message['fr_FR'] =
            array(
                'CONNECTION' =>
                    "Connexion avec hôte {0} avec banque de données {1} {2, select, e {déjà établie} o {ouverte} c {fermée} n {n'existe pas} other {ratée}}.",
                'SESSION' =>
                    "session {0, select, s {securisée} other {non securisée}} avec nom {1} {2, select, s {ouverte} as {déjà ouverte} u {pas securisée et donc pas ouverte (ini_set)} r {régénérée} nr {ne pas régénérée} tv {ticket validé} ti {ticket invalidé} il {ouverte dans login} ol {ouverte en dehors de la classe Identity} other {inéterminé}}.",
                'IDENTITY' =>
                    "{0, select, v { {1, select, u {utilisateur} p {mot de passe} t {ticket} other {indéfini}} {2, select, is {est} other {n'est pas}} vérifié} si {connecté} so {disconnecté} isi {{2, select, is {est} other {n'est}} connecté} nsi {{2, select, is {est} other {n'est pas}} disconnecté} fa {limite essais de connection {2, select, is {est} other {n'est pas}} atteinte} other {indéfini}}",
                'VALIDATION' => array(
                    'REQUIRED' =>
                        "{0} est obligatoire",
                    'INVALIDINPUT' =>
                        "Données invalides. Impossible {0, select, i {d'insérer} u {de mettre à jour} other {indéfini}}."),
                 'SP' =>
                    "Erreur dans stored procedure {0}",
                'CRUD' =>
                    "{2, select, 0 {Ligne } other {{3, select, 1  { Ligne avec Id {2}} other {{2} ligne(s) }} } } {1, select, is {est } a {sont } other {n'est pas }} {0, select, c {insérée} u {mise à jour} d {summrimée} r {trouvée(s)} other {indéfini}}");

        $this->message['nl_NL'] =
            array(
                'CONNECTION' =>
                    "Verbinding met host {0} met database {1} {2, select, e {bestaat al} o {geopend} c {gesloten} n {bestaat niet} other {mislukt}}.",
                'SESSION' =>
                    "{0, select, s {Beveiligde} other {Onbeveiligde}} sessie met de naam {1} {2, select, s {gestart} as {reeds gestart} u {niet vielig en niet gestart (ini_set)} r {geregeneerd} nr {niet geregeneerd} tv {geldig ticket} ti {ongeldig ticket} il {in login geopend} ol {buiten de Identity klasse geopend} other {niet nader bapaald}}.",
                'IDENTITY' =>
                    "{0, select, v { {1, select, u {gebruiker} p {wachtwoord} t {ticket} other {onbepaald}} {2, select, is {is} other {niet}} geverifiëerd} si {aanmelden} so {afmelden} isi {{2, select, is {is} other {niet}} aangemeld} nsi {{2, select, is {is} other {niet}} aangemeld} fa {maximum login pogingen {2, select, is {is} other {niet}} bereikt} other {onbepaald}}",
                'VALIDATION' => array(
                    'REQUIRED' =>
                        "{0} is verplicht veld",
                    'INVALIDINPUT' =>
                        "Ongeldige inputgegevens. Kan niet {0, select, i {inserten} u {updaten} other {onbepaald}}."),
                 'SP' =>
                    "Fout in stored procedure {0}",
                 'CRUD' =>
                    "{2, select, 0 {Rij } other {{3, select, 1  { Rij met Id {2}} other {{2} rij(en)}} } } {1, select, is {is} a {zijn} other {is niet }} {0, select, c {geïnserted} u {geüpdated} d {gedeleted} r {gevonden} other {onbepaald}}");

    }

    /**
     * Session messages
     */
    public function session($secure, $name, $type)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['SESSION'],
            array($secure ? 'Secured' : 'Insecured', $name, $type));
    }

    /**
     * Connection messages
     */
    public function connection($hostName, $databaseName, $type)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CONNECTION'],
            array($hostName, $databaseName, $type));
    }

    /**
     * Identity messages
     */
    public function identity($type)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['IDENTITY'],
            $type);
    }

    /**
     * Validation messages
     */
    public function validationRequired($value)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['VALIDATION']['REQUIRED'],
            array($value));
    }

    public function validationInvalidInput($value)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['VALIDATION']['INVALIDINPUT'],
            array($value));
    }

    /**
     * DAL CRUD messages
     */

    public function created($bool = false, $id = 0)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CRUD'],
            array($this::CREATE, $bool ? 'is' : 'not', $id, $this::ID));
    }

    public function updated($bool = false, $id = 0)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CRUD'],
            array($this::UPDATE, $bool ? 'is' : 'not', $id, $this::ID));
    }

    public function deleted($bool = false, $id = 0)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CRUD'],
            array($this::DELETE, $bool ? 'is' : 'not', $id, $this::ID));
    }

    public function read($bool = false, $id = 0)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CRUD'],
            array($this::READ, $bool ? 'is' : 'not', $id, $this::ID));
    }

    public function readAll($bool = false, $number = 0)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CRUD'],
            array($this::READ, $bool ? 'a' : 'not', $number, $this::QUANTITY));
    }

    public function readBy($bool = false, $columnName = 'undefined', $number = 0)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['CRUD'],
            array($this::READ, $bool ? 'a' : 'not', $number, $this::QUANTITY));
    }

    /**
     * Store procedure messages
     */
    public function sp($name)
    {
        return \MessageFormatter::formatMessage($this->locale,
            $this->message[$this->locale]['SP'],
            array($name));
    }
}

