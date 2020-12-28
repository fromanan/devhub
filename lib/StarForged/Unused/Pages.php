<?php


namespace StarForged;


use Iterator;

class Pages implements Iterator
{
    private int $position;
    private array $pages =
    [
        "index.php" =>
            [
                "title" => "Home",
                "description" => "",
                "color" => Enums\Color::PRIMARY,
                "icon" => "<span aria-hidden=\"true\" class=\"icon_documents_alt icon\"></span>"
            ],
        "start.php" =>
            [
                "title" => "Setting Up",
                "description" => "Demo example, consectetuer adipiscing elit",
                "color" => Enums\Color::GREEN,
                "icon" => "<i class=\"icon fa fa-paper-plane\"></i>"
            ],
        "charts.php" =>
            [
                "title" => "GDD",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Enums\Color::BLUE,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_datareport_alt\"></span>"
            ],
        "components.php" =>
            [
                "title" => "Class Documentation",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Enums\Color::PINK,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_puzzle_alt\"></span>"
            ],
        "faqs.php" =>
            [
                "title" => "FAQs",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Enums\Color::PURPLE,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_lifesaver\"></span>"
            ],
        "showcase.php" =>
            [
                "title" => "Showcase",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
                "color" => Enums\Color::PRIMARY,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_genius\"></span>"
            ],
        "license.php" =>
            [
                "title" => "License &amp; Credits",
                "description" => "Layout for license &amp; credits page. Consectetuer adipiscing elit.",
                "color" => Enums\Color::ORANGE,
                "icon" => "<span aria-hidden=\"true\" class=\"icon icon_gift\"></span>"
            ],
    ];

    public function encodeAndSave() : void
    {
        $jsonData = json_encode($this->pages);

        $file = fopen("pages.json", "w") or die("Unable to open file!");
        fwrite($file, $jsonData);
        fclose($file);

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

    public function key() : int
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next()
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid() : bool
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