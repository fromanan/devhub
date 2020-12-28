<?php


namespace StarForged;



class Question extends HtmlObject
{
    /**
     * Question constructor.
     * @param $question
     * @param $answers
     * @param $tags
     */
    public function __construct($question, $answers, $tags)
    {
        $this->question = $question;
        $this->answers = $answers;
        $this->tags = $tags;
    }

    public function buildHtml() : void
    {
        $html = "<div class=\"section-block\">";

        $html .= "<h3 class=\"question\">" . new Icon(Icon::QUESTION_CIRCLE) . " " . $this->question;
        foreach ($this->tags as $tag)
        {
            $html .= " ";
            $html .= match ($tag) {
                'new' => "<span class=\"badge badge-success\">New</span>",
                'updated' => "<span class=\"badge badge-warning\">Updated</span>",
            };
        }
        $html .= "</h3>";

        $html .= "<div class=\"answer\">";
        foreach ($this->answers as $answer) $html .= new Tag(Tag::TEXT, $answer);
        $html .= "</div>";

        $html .= "</div>";
        $this->html = $html;
    }

    private string $question;
    private array $answers;
    private array $tags;
}