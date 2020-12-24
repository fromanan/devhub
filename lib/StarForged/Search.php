<?php


namespace StarForged;


class Search
{

    /**
     * Search constructor.
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

        echo $tag->display();
    }
}