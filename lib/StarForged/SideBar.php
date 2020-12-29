<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Tag;

class SideBar extends HtmlObject
{
    /**
     * SideBar constructor.
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $pageData = Extensions::LoadJson($filename);
        $this->buildHtml($pageData);
    }

    public function buildHtml(array $pageData) : void
    {
        $block = new Block();
        foreach ($pageData as $section => $value)
        {
            $block->addTag(new Link($section, $value['link'], ["nav-link", "scrollto"]));

            if (!array_key_exists('sublinks', $value)) continue;

            $innerBlock = new Block();
            foreach ($value['sublinks'] as $subsection => $link)
                $innerBlock->addTag(new Link($subsection, $link, ["nav-link", "scrollto"]));

            $block->addTag(new Tag(Tag::NAV, $innerBlock, ["doc-sub-menu", "nav", "flex-column"]));
        }
        $menu = new Tag(Tag::NAV, $block, ["nav", "doc-menu", "flex-column", "sticky"], "doc-menu");
        $this->html = new Div($menu . "<!--//doc-menu-->", ["doc-nav"], "doc-nav");
    }
}