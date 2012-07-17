<?php

namespace Guzzle\Openkvk\Api\Command;

use Guzzle\Service\Command\AbstractCommand;
use Guzzle\Openkvk\Api\Model\QueryResult;

class Query extends AbstractCommand
{
    public function getQuery()
    {
        return $this->get('query');
    }

    public function setQuery($query)
    {
        return $this->set('query', $query);
    }

    protected function build()
    {
        $this->request = $this->client->get(array('{query}', $this->data));
    }

    protected function process()
    {
        parent::process();
        $current = current($this->result);
        $result = $current['RESULT'];
        $this->result = new QueryResult($result['TYPES'], $result['HEADER'], $result['ROWS']);
    }
}