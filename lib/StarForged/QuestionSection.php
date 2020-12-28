<?php


namespace StarForged;


class QuestionSection extends HtmlObject
{
    /**
     * QuestionSection constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->data = Extensions::LoadJson($filename);
        $this->title = $this->data['title'];
        $this->buildHtml();
    }

    public function buildHtml() : void
    {
        $html = "<section id=\"" . strtolower($this->title) . "\" class=\"doc-section\">";
        $html .= new Tag(Tag::HEADER2, $this->title, ["section-title"]);

        foreach ($this->data['questions'] as $question => $attributes)
        {
            $html .= new Question($question, $attributes['answer'], array_key_exists('tags', $attributes)
                ? $attributes['tags'] : []);
        }

        $html .= "</section>";
        $this->html = $html;
    }

    private string $title;
    private array $data;
}