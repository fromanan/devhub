<?php


namespace StarForged;


use StarForged\Enums\CalloutType;


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
        $iconType = match ($calloutType) {
            CalloutType::INFO => Icon::INFO_CIRCLE,
            CalloutType::WARNING => Icon::BUG,
            CalloutType::SUCCESS => Icon::THUMBS_UP,
            CalloutType::DANGER => Icon::EXCLAMATION_TRIANGLE,
        };
        $html = new Tag(Tag::DIV, new Icon($iconType), ["icon-holder"]) . "<!--//icon-holder-->";
        $content = new Tag(Tag::HEADER4, $title, ["callout-title"]);
        $content .= new Tag(Tag::TEXT, $body);
        $html .= new Tag(Tag::DIV, $content, ["content"]) . "<!--//content-->";
        $this->html = new Tag(Tag::DIV, $html, ["callout-block", $calloutType]) . "<!--//callout-block-->";
    }
}
