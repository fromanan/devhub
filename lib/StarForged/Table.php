<?php


namespace StarForged;


class Table
{
    /**
     * Table constructor.
     * @param string $filename
     * @param string $tableType
     */
    public function __construct(string $filename, string $tableType = "")
    {
        $pageData = json_decode(file_get_contents($filename), true);

        $this->num_rows = $pageData["num-rows"];
        $this->num_cols = $pageData["num-cols"];

        $html = "<h6>" . $pageData["title"] . "</h6>";

        $html .= "<div class=\"table-responsive\">";

        $html .= "<table class=\"table";
        if ($tableType != "")
        {
            $html .= " ";
            $html .= $tableType;
        }
        $html .= "\">";

        $html .= "<thead><tr><th>#</th>";
        foreach ($pageData["headers"] as $header)
        {
            $html .= "<th>" . $header . "</th>";
        }
        $html .= "</tr></thead>";

        $html .= "<tbody>";
        for ($i = 0; $i < $this->num_rows; $i++)
        {
            $col = $pageData["rows"][$i];
            $html .= "<tr>";
            $html .= "<th scope=\"row\">" . ($i + 1) . "</th>";
            foreach ($col as $row)
            {
                $html .= "<td>" . $row . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tbody>";

        $html .= "</table>";

        $html .= "</div><!--//table-responsive-->";

        echo $html;
    }

    private $num_rows;
    private $num_cols;
}