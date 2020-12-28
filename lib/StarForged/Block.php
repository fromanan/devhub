<?php


namespace StarForged;


class Block extends HtmlObject
{
    /**
     * Block constructor.
     * @param array $tags
     */
    public function __construct(array $tags)
    {
        $this->html = implode($tags);
    }
}