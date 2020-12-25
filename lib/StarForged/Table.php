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
        $data = Extensions::LoadJson($filename);
        $this->data = $data;

        $this->num_rows = $data["num-rows"];
        $this->num_cols = $data["num-cols"];

        $html = "<h6>" . $data["title"] . "</h6>";

        $html .= "<div class=\"table-responsive\">";

        $html .= "<table class=\"table";
        if ($tableType != "")
        {
            $html .= " ";
            $html .= $tableType;
        }
        $html .= "\">";

        $html .= "<thead><tr><th>#</th>";
        foreach ($data["headers"] as $header)
        {
            $html .= "<th>" . $header . "</th>";
        }
        $html .= "</tr></thead>";

        $html .= "<tbody>";
        for ($i = 0; $i < $this->num_rows; $i++)
        {
            $col = $data["rows"][$i];
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

    private array $data;
    private int $num_rows;
    private int $num_cols;
}