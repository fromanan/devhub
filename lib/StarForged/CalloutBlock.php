<?php


namespace StarForged;


use StarForged\Enums\CalloutType;
use StarForged\Tags\Div;
use StarForged\Tags\Tag;
use StarForged\Tags\Text;


class CalloutBlock extends HtmlObject
{
    /**
     * CalloutBlock constructor.
     * @param string $calloutType
     * @param string $title
     * @param string $body
     */
    public function __construct(string $calloutType, string $title, string $body)
    {
        $block = new Block();
        $iconType = match ($calloutType) {
            CalloutType::INFO => Icon::INFO_CIRCLE,
            CalloutType::WARNING => Icon::BUG,
            CalloutType::SUCCESS => Icon::THUMBS_UP,
            CalloutType::DANGER => Icon::EXCLAMATION_TRIANGLE,
        };
        $block->addTag(new Div(new Icon($iconType), ["icon-holder"]) . "<!--//icon-holder-->");
        $content = new Tag(Tag::HEADER4, $title, ["callout-title"]) . new Text($body);
        $block->addTag(new Div($content, ["content"]) . "<!--//content-->");
        $this->html = new Div($block, ["callout-block", $calloutType]) . "<!--//callout-block-->";
    }
}
