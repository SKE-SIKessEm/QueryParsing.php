<?php namespace Ske\Parsing\Query;

/**
 * SIKessEm Query parser interface
 * 
 * @package sikessem/parsing-query
 * @author SIGUI Kessé Emmanuel
 * @license MIT License
 */
interface QueryParser
{
    /**
     * Parse the parser query
     * 
     * @return namespace\QueryParsed
     */
    public function parse(): QueryParsed;
}