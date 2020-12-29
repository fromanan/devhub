<?php


namespace StarForged;



use StarForged\Tags\Div;
use StarForged\Tags\Span;

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
        $this->buildHtml();
    }

    public function buildHtml() : void
    {
        $title = new Icon(Icon::QUESTION_CIRCLE) . " " . $this->question . $this->tagString();
        $body = new Div(Block::fromData($this->answers, "StarForged\Tags\Text"), ["answer"]);
        $this->html = new SectionBlock($body, $title, titleClasses: ["question"]);
    }

    private function tagString() : string
    {
        $block = new Block();
        foreach ($this->tags as $tag)
        {
            $block->addTag(" " . match ($tag)
                {
                    'new' => new Span("New", ["badge", "badge-success"]),
                    'updated' => new Span("Updated", ["badge", "badge-warning"])
                });
        }
        return $block;
    }

    private string $question;
    private array $answers;
    private array $tags;
}