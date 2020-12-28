<?php


namespace StarForged;


class HtmlObject
{
    public function getHtml(): string
    {
        return $this->html;
    }

    public function display(): void
    {
        echo $this->html;
    }

    public function __toString(): string
    {
        return $this->html;
    }

    protected string $html;
}