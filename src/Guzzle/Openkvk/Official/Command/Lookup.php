<?php

namespace Guzzle\Openkvk\Official\Command;

use Guzzle\Service\Command\AbstractCommand;
use Guzzle\Openkvk\Official\Model\Entry;

class Lookup extends AbstractCommand
{
    public function getCocNumber()
    {
        return $this->get('cocNumber');
    }

    public function setCocNumber($cocNumber)
    {
        return $this->set('cocNumber', $cocNumber);
    }

    protected function build()
    {
        $this->request = $this->client->get(array('{cocNumber}', $this->data));
    }

    protected function process()
    {
        parent::process();
        $entries = array();
        foreach ($this->result as $result) {
            $entries[] = new Entry($result);
        }

        $this->result = $entries;
    }
}