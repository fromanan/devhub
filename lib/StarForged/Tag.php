<?php


namespace StarForged;


use JetBrains\PhpStorm\Pure;

class Tag
{
    public function __construct(string $tagType, string $body, array $classes = [])
    {
        $this->tagType = $tagType;
        $this->body = $body;
        $this->classes = $classes;
    }

    public function addClass(string $className) : void
    {
        $this->classes[] = $className;
    }

    #[Pure] public function display() : string
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

    private string $tagType;
    private string $body;
    private array $classes;
}