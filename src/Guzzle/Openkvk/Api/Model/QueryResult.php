<?php

namespace Guzzle\Openkvk\Api\Model;

class QueryResult implements \Iterator
{
    protected $pointer = 0;
    protected $types;
    protected $headers;
    protected $rows;

    public function __construct(array $types, array $headers, array $rows)
    {
        $this->types = $types;
        $this->headers = $headers;
        $this->rows = $rows;
    }

     /**
     * {@inheritdoc}
     *
     * @return int|null
     */
    public function key()
    {
        return $this->pointer;
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        $this->pointer++;
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        $this->pointer = 0;
    }

    /**
     * {@inheritdoc}
     *
     * @return boolean
     */
    public function valid()
    {
        return isset($this->rows[$this->pointer]);
    }

    public function current()
    {
        $values = \array_combine($this->headers, $this->rows[$this->pointer]);
        return new Row($values);
    }
}