<?php

namespace Guzzle\Openkvk\Tests\Official\Command;

use Guzzle\Tests\GuzzleTestCase;

class QueryTest extends GuzzleTestCase
{
    public function testLookup()
    {
        $client = $this->getServiceBuilder()->get('client.api');
        $command = $client->getCommand('query');
        $command->setQuery('select * from kvk where kvks = 27312152 limit 1');
        $result = $client->execute($command);

        foreach ($result as $row) {
            var_dump($row);die;
        }
    }
}