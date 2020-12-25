<?php


namespace StarForged;


class Question
{
    /**
     * Question constructor.
     * @param $content
     */
    public function __construct($question, $answers, $tags)
    {
        $this->question = $question;
        $this->answers = $answers;
        $this->tags = $tags;
    }

    public function display() : string
    {
        $html = "<div class=\"section-block\">";

        $html .= "<h3 class=\"question\"><i class=\"fas fa-question-circle\"></i> " . $this->question;
        foreach ($this->tags as $tag)
        {
            $html .= " ";
            switch ($tag)
            {
                case 'new':
                    $html .= "<span class=\"badge badge-success\">New</span>";
                    break;
                case 'updated':
                    $html .= "<span class=\"badge badge-warning\">Updated</span>";
                    break;
            }
        }
        $html .= "</h3>";

        $html .= "<div class=\"answer\">";
        foreach ($this->answers as $answer)
        {
            $html .= "<p>" . $answer . "</p>";
        }
        $html .= "</div>";

        $html .= "</div>";
        return $html;
    }

    private string $question;
    private array $answers;
    private array $tags;
}