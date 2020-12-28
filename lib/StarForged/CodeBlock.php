<?php


namespace StarForged;


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
        $body = "";
        if ($title !== "") $body .= new Tag(Tag::HEADER6, $title);
        if ($loaded) $body .= new Tag("pre", new Tag(Tag::CODE, $content, [$codeType]));
        else $body .= $content;
        $this->html = new Tag(Tag::DIV, $body, ["code-block"]) . "<!--//code-block-->";
    }
}