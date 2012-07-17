<?php

namespace Guzzle\Openkvk\Official\Model;

/**
 * An entry in the Dutch Chamber of Commerce database
 */
class Entry
{
    const TYPE_RECHTSPERSOON = 'Rechtspersoon';
    const TYPE_HOOFDVESTIGING = 'Hoofdvestiging';

    protected $rechtspersoon;

    protected $type;

    protected $kvk;

    protected $kvks;

    protected $vestigingsnummer;

    protected $adres;

    protected $postcode;

    protected $woonplaats;

    protected $handelsnamen = array();

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            $this->$key = $value;
        }
    }
}