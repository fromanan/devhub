<?php


namespace StarForged;


class QuestionSection
{
    /**
     * QuestionSection constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->data = Extensions::LoadJson($filename);
        $this->title = $this->data['title'];
    }

    public function display() : string
    {
        $html = "<section id=\"" . strtolower($this->title) . "\" class=\"doc-section\">";
        $html .= "<h2 class=\"section-title\">" . $this->title . "</h2>";

        foreach ($this->data['questions'] as $question => $attributes)
        {
            $question = new Question($question, $attributes['answer'], array_key_exists('tags', $attributes)
                ? $attributes['tags'] : []);

            $html .= $question->display();
        }

        $html .= "</section>";
        return $html;
    }

    private string $title;
    private array $data;
}