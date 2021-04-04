<?php

namespace VDB\Spider\Filter\Prefetch;

use VDB\Spider\Filter\PreFetchFilterInterface;
use VDB\Uri\UriInterface;

/**
 * @author spekulatius
 */
class RobotsTxtFilter implements PreFetchFilterInterface
{
    /**
     * @var string
     */
    public $robotstxt = array();

    public function __construct(string $robotstxt)
    {
        $this->robotstxt = $robotstxt;
    }

    public function match(UriInterface $uri)
    {




        foreach ($this->regexes as $regex) {
            if (preg_match($regex, $uri->toString())) {
                return true;
            }
        }
        return false;
    }
}
