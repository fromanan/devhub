<?php


namespace StarForged;


class Card
{
    public function __construct(string $color, string $title, string $body, string $link, string $icon)
    {
        $this->color = $color;
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->icon = $icon;
    }

    public function display() : string
    {
        return <<<HTML
<div class="item $this->color col-lg-4 col-6">
    <div class="item-inner">
        <div class="icon-holder">
            $this->icon
        </div><!--//icon-holder-->
        <h3 class="title">$this->title</h3>
        <p class="intro">$this->body</p>
        <a class="link" href="$this->link"><span></span></a>
    </div><!--//item-inner-->
</div><!--//item-->
HTML;
    }

    private $color = '';
    private $title = '';
    private $body = '';
    private $link = '';
    private $icon = '';
}