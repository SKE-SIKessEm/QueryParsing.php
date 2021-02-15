<?php namespace Ske\Parsing\Query;

/**
 * SIKessEm Query parsed class
 * 
 * @package sikessem/parsing-query
 * @author SIGUI Kessé Emmanuel
 * @license MIT License
 */
class QueryParsed
{
    /**
     * Create a new parsed query
     * 
     * @param array $data The query parsed data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @var array $data The query parsed data
     */
    protected array $data;

    /**
     * Give the query data
     * 
     * @param array $data The query parsed data
     * @param null|string $name The data index
     * @return mixed
     */
    public function data(?string $name = null)
    {
        return isset($name) ? ($this->data[$name] ?? null) : $this->data;
    }

    /**
     * Give the query data value by index
     * 
     * @param string $name The data index
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data($name);
    }
}
