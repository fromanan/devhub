<?php


namespace StarForged;


use StarForged\Tags\Tag;

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
        $block = new Block();
        $block->addTag(new Tag(Tag::HEADER2, $title, ["section-title"]));
        $block->addTag(new SectionBlock($body));
        $this->html = new Tag(Tag::SECTION, $block, $classes, $id) . "<!--//doc-section-->";
    }
}