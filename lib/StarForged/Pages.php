<?php


namespace StarForged;


class Pages implements \Iterator
{
    private $position = 0;
    private $pages =
    [
        "index.php" =>
            [
                "title" => "Home",
                "description" => "",
                "color" => Color::PRIMARY,
                "icon" => "<span aria-hidden=\"true\" class=\"icon_documents_alt icon\"></span>"
            ],
        "start.php" =>
            [
                "title" => "Setting Up",
                "description" => "Demo example, consectetuer adipiscing elit",
                "color" => Color::GREEN,
                "icon" => "<i class=\"icon fa fa-paper-plane\"></i>"
            ],
        "charts.html" =>
            [
                "title" => "GDD",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Color::BLUE,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_datareport_alt\"></span>"
            ],
        "components.html" =>
            [
                "title" => "Class Documentation",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Color::PINK,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_puzzle_alt\"></span>"
            ],
        "faqs.html" =>
            [
                "title" => "FAQs",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Color::PURPLE,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_lifesaver\"></span>"
            ],
        "showcase.html" =>
            [
                "title" => "Showcase",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Color::PRIMARY,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_genius\"></span>"
            ],
        "license.html" =>
            [
                "title" => "License &amp; Credits",
                "description" => "Layout for license &amp; credits page. Consectetuer adipiscing elit.",
                "color" => Color::ORANGE,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_gift\"></span>"
            ],
    ];

    public function encodeAndSave()
    {
        $jsonData = json_encode($this->pages);

        $myfile = fopen("pages.json", "w") or die("Unable to open file!");
        fwrite($myfile, $jsonData);
        fclose($myfile);

        echo $jsonData."\n";
    }

    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind()
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current()
    {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function key()
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next()
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid()
    {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    public function contains(string $pageName) : bool
    {
        return array_key_exists($pageName, $this->pages);
    }

    public function getPage(string $pageName) : array
    {
        if ($this->contains($pageName))
        {
            return $this->pages[$pageName];
        }
        return [];
    }
}