<?php


namespace StarForged;


class Table extends HtmlObject
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
        $this->tableType = $tableType;
        $this->num_rows = $data["num-rows"];
        $this->num_cols = $data["num-cols"];
        $this->buildHtml();
    }

    public function buildHtml() : void
    {
        $html = "<h6>" . $this->data["title"] . "</h6>";

        $html .= "<div class=\"table-responsive\">";

        $html .= "<table class=\"table";
        if ($this->tableType != "")
        {
            $html .= " ";
            $html .= $this->tableType;
        }
        $html .= "\">";

        $html .= "<thead><tr><th>#</th>";
        foreach ($this->data["headers"] as $header)
        {
            $html .= "<th>" . $header . "</th>";
        }
        $html .= "</tr></thead>";

        $html .= "<tbody>";
        for ($i = 0; $i < $this->num_rows; $i++)
        {
            $col = $this->data["rows"][$i];
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

        $this->html = $html;
    }

    private array $data;
    private string $tableType;
    private int $num_rows;
    private int $num_cols;
}