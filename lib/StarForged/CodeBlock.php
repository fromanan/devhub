<?php


namespace StarForged;


use StarForged\Tags\Tag;

class CodeBlock extends HtmlObject
{
    public function __construct(string $title, string $codeType, string $content, bool $loadContentFromFile = false)
    {
        if ($loadContentFromFile)
        {
            $content = htmlentities(file_get_contents($content));
        }
        $this->buildHtml($title, $codeType, $content, $loadContentFromFile);
    }

    public function buildHtml(string $title, string $codeType, string $content, bool $loaded) : void
    {
        $language = "language-" . $codeType;
        $body = !$loaded ? $content : new Tag(Tag::PRE, new Tag(Tag::CODE, $content, [$language]), [$language]);
        $this->html = new SectionBlock($body, $title, "", ["code-block"], Tag::HEADER6, useDefaults: false) . "<!--//code-block-->";
    }
}