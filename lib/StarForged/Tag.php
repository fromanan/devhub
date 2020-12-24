<?php


namespace StarForged;


class Tag
{
    public function __construct(string $tagType, string $body, array $classes = [])
    {
        $this->tagType = $tagType;
        $this->body = $body;
        $this->classes = $classes;
    }

    public function addClass(string $className)
    {
        $this->classes[] = $className;
    }

    public function display() : string
    {
        $html = "<$this->tagType";

        if (count($this->classes) > 0)
        {
            $html .= " class=\"" . implode(" ", $this->classes) . "\"";
        }

        $html .= ">";

        $html .= $this->body;

        $html .= "</$this->tagType>";

        return $html;
    }

    private $tagType = '';
    private $body = '';
    private $classes = [];
}