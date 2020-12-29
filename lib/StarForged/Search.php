<?php


namespace StarForged;


use StarForged\Tags\Div;
use StarForged\Tags\Tag;

class Search extends HtmlObject
{
    /**
     * Search constructor.
     * @param array $classes
     */
    public function __construct(array $classes = [])
    {
        $body = new Tag(Tag::INPUT, "", ["form-control", "search-input"], "", ["type=\"text\"", "placeholder=\"Enter search terms...\"", "name=\"search\""]);
        $body .= new Tag(Tag::BUTTON, new Icon(Icon::SEARCH), ["btn", "search-btn"], "", ["type=\"submit\"", "value=\"Search\""]);
        $form = new Tag(Tag::FORM, $body, ["form-inline", "search-form", "justify-content-center"], "", ["action=\"\"", "method=\"get\""]);
        $this->html = new Div($form, $classes);
    }
}