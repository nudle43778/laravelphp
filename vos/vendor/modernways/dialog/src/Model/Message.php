<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 26/04/2016
 * Time: 14:16
 */

namespace ModernWays\Dialog\Model; 

/**
 * Message class
 *
 * @lastmodified
 * @since 26/04/2016
 * @author Entreprise de Modes et de Manieres Modernes - e3M
 * @version 0.1
 */
class Message
{
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
        return $this->message[$this->locale];
    }
    

    public function __construct($locale = 'en_US')
    {
        $this->locale = $locale;
        $this->message['en_US'] =
            array(
                'Validation' => array(
                    'Required' => 'Required',
                    'Number' => 'Numbers only'),
                'Login' => array('Index' => array(
                    'UserName' => 'User Name',
                    'Password' => 'Password')),
                'User' =>
                    array('ColumnName' => array(
                        'UserName' => 'User name',
                        'Password' => 'Password',
                        'Image' => 'Image',
                        'LocationId' => 'Location')),
                array('Placeholder' => array(
                    'UserName' => 'Type your user name',
                    'Password' => 'Type your password',
                    'Image' => 'Place here your image',
                    'LocationId' => 'Choose a location')));

        $this->message['nl_NL'] =
            array(
                'Validation' => array(
                    'Required' => 'Verplicht',
                    'Number' => 'Alleen cijfers'),
                'Login' => array('Index' => array(
                    'UserName' => 'Gebruikersnaam',
                    'Password' => 'Paswoord')),
                'User' =>
                    array('ColumnName' => array(
                        'UserName' => 'Gebruikersnaam',
                        'Password' => 'Paswoord',
                        'Image' => 'Afbeelding',
                        'LocationId' => 'Locatie')),
                array('Placeholder' => array(
                    'UserName' => 'Typ hier je gebruikersnaam',
                    'Password' => 'Typ hier je paswoord',
                    'Image' => 'Plaats hier je afebeelding',
                    'LocationId' => 'Kies een locatie')));
    }
}