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
        $block = new Block();
        foreach ($this->data['questions'] as $question => $attributes)
            $block->addTag(new Question($question, $attributes['answer'], array_key_exists('tags', $attributes) ? $attributes['tags'] : []));
        $this->html = new Section($this->title, strtolower($this->title), $block, ["doc-section"]);
    }

    private string $title;
    private array $data;
}