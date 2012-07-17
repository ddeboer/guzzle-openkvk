<?php

namespace Guzzle\Openkvk\Api\Model;

class Row
{
    protected $kvk;

    protected $bedrijfsnaam;

    protected $kvks;

    protected $sub;

    protected $adres;

    protected $postcode;

    protected $plaats;

    protected $type;

    protected $status;

    protected $website;

    protected $vestiging;

    protected $rechtsvorm;

    protected $lat_rad;

    protected $lon_rad;

    protected $anbi;

    public function __construct(array $values = array())
    {
        foreach ($values as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getKvk()
    {
        return $this->kvk;
    }

    public function getBedrijfsnaam()
    {
        return $this->bedrijfsnaam;
    }

    public function getKvks()
    {
        return $this->kvks;
    }

    public function getSub()
    {
        return $this->sub;
    }

    public function getAdres()
    {
        return $this->adres;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function getPlaats()
    {
        return $this->plaats;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function getVestiging()
    {
        return $this->vestiging;
    }

    public function getRechtsvorm()
    {
        return $this->rechtsvorm;
    }

    public function getLat_rad()
    {
        return $this->lat_rad;
    }

    public function getLon_rad()
    {
        return $this->lon_rad;
    }

    public function getAnbi()
    {
        return $this->anbi;
    }
}