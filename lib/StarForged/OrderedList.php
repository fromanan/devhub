<?php


namespace StarForged;


class OrderedList extends HtmlObject
{
    /**
     * OrderedList constructor.
     * @param array $elements
     * @param array $extraClasses
     */
    public function __construct(array $elements, array $extraClasses=[])
    {
        $body = "";
        foreach ($elements as $element) $body .= new Tag(Tag::LI, $element);
        $this->html = new Tag(Tag::OL, $body, array_merge(["list"], $extraClasses));
    }
}