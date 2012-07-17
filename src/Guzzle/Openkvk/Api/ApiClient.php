<?php

namespace Guzzle\Openkvk\Api;

use Guzzle\Service\Client;
use Guzzle\Service\Inspector;

class ApiClient extends Client
{
    /**
     * Factory method to create a new OpenkvkClient
     *
     * @param array|Collection $config Configuration data. Array keys:
     *    base_url - Base URL of web service
     *
     * @return OpenkvkClient
     *
     * @TODO update factory method and docblock for parameters
     */
    public static function factory($config = array())
    {
        $default = array(
            'base_url' => 'http://api.openkvk.nl/{format}/',
            'format' => 'json'
        );
        $required = array('base_url');
        $config = Inspector::prepareConfig($config, $default, $required);

        $client = new self($config->get('base_url'));
        $client->setConfig($config);

        return $client;
    }
}