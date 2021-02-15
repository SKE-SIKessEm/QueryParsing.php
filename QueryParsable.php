<?php namespace Ske\Parsing\Query;

/**
 * SIKessEm Query parsable class
 * 
 * @package sikessem/parsing-Query
 * @author SIGUI Kessé Emmanuel
 * @license MIT License
 */
class QueryParsable implements QueryParser
{
    /**
     * Create a new parsable query
     * 
     * @param null|string $query The query to parse
     */
    public function __construct(?string $query)
    {
        $this->query = $query;
    }

    /**
     * @var null|string The query to parse
     */
    protected ?string $query;

    /**
     * Parse the query
     * 
     * @param string $query The query to parse
     * @return namespace\QueryParsed
     */
    public function parse(): QueryParsed
    {
        parse_str($this->query, $data);
        return new QueryParsed($data);
    }
}