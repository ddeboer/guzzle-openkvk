<?php

namespace Guzzle\Openkvk\Tests\Official\Command;

use Guzzle\Tests\GuzzleTestCase;

class LookupTest extends GuzzleTestCase
{
    public function testLookup()
    {
        $client = $this->getServiceBuilder()->get('client.official');
        $command = $client->getCommand('lookup');
        $command->setCocNumber('32061933');
        $result = $client->execute($command);
    }
}