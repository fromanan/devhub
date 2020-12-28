<?php


namespace StarForged;


class Tag extends HtmlObject
{
    public function __construct(string $tagType, string $body="", array $classes=[], string $id="", array $attributes=[])
    {
        $this->tagType = $tagType;
        $this->body = $body;
        $this->classes = $classes;
        $this->attributes = $attributes;
        $this->id = $id;
        $this->buildHtml();
    }

    public function buildHtml() : void
    {
        $html = "<$this->tagType";

        if ($this->id !== "")
        {
            $html .= " id=\"$this->id\"";
        }

        if (count($this->classes) > 0)
        {
            $html .= " class=\"" . implode(" ", $this->classes) . "\"";
        }

        if (count($this->attributes) > 0)
        {
            $html .= " " . implode(" ", $this->attributes);
        }

        $html .= ">";
        $html .= $this->body;
        $html .= "</$this->tagType>";

        $this->html = $html;
    }

    private string $tagType;
    private string $body;
    private string $id;
    private array $classes;
    private array $attributes;

    #region CONSTANTS
    const HEADER1 = 'h1';
    const HEADER2 = 'h2';
    const HEADER3 = 'h3';
    const HEADER4 = 'h4';
    const HEADER5 = 'h5';
    const HEADER6 = 'h6';
    const HEADER7 = 'h7';
    const TEXT = 'p';
    const ANCHOR = 'a';
    const DIV = 'div';
    const OL = 'ol';
    const UL = 'ul';
    const LI = 'li';
    const HEADER = "header";
    const FOOTER = "footer";
    const BODY = "body";
    const META = "meta";
    const IFRAME = "iframe";
    const SECTION = "section";
    const HTML = "html";
    const IMAGE = "img";
    const ICON = "i";
    const PRE = "pre";
    const CODE = "code";
    const SPAN = "span";
    const FORM = "form";
    const SMALL = "small";
    const LINK = "link";
    const SCRIPT = "script";
    const BUTTON = "button";
    const INPUT = "input";
    #endregion
}