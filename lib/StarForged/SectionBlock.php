<?php


namespace StarForged;




class SectionBlock extends HtmlObject
{
    /**
     * SectionBlock constructor.
     * @param string $title
     * @param string $id
     * @param string $body
     * @param array $classes
     */
    public function __construct(string $title, string $id, string $body, array $classes=[])
    {
        $text = new Tag(Tag::HEADER3, $title, ["block-title"]) . $body;
        $this->html = new Tag(Tag::DIV, $text, array_merge(["section-block"], $classes), $id) . "<!--//section-block-->";
    }
}