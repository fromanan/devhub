<?php


namespace StarForged;


class Section extends HtmlObject
{
    /**
     * Section constructor.
     * @param string $title
     * @param string $id
     * @param string $body
     * @param array $classes
     */
    public function __construct(string $title, string $id, string $body, array $classes=[])
    {
        $block = new Block([new Tag(Tag::HEADER2, $title, ["section-title"]),
            new Tag(Tag::DIV, $body, ["section-block"]) . "<!--//doc-section-->"]);
        $this->html = new Tag(Tag::SECTION, $block, $classes, $id);
    }
}