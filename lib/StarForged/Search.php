<?php


namespace StarForged;

use StarForged\Enums\TagType as TagType;


class Search
{

    /**
     * Search constructor.
     * @param array $classes
     */
    public function __construct(array $classes = [])
    {
        $body = <<<HTML
 <form class="form-inline search-form justify-content-center" action="" method="get">

    <input type="text" placeholder="Enter search terms..." name="search" class="form-control search-input">
    
    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
    
</form>
HTML;
        $tag = new Tag(TagType::DIV, $body, $classes);

        $this->html = $tag->display();
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return $this->html;
    }

    private string $html;
}