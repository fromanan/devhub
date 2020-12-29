<?php


namespace StarForged;


use JetBrains\PhpStorm\Pure;

class Block extends HtmlObject
{
    /**
     * Block constructor.
     * @param array $tags
     */
    public function __construct(array $tags=[])
    {
        $this->tags = $tags;
    }

    public static function fromData(array $argArray, $appendType) : Block
    {
        $block = new Block();
        foreach ($argArray as $args) $block->addTag(new $appendType($args));
        return $block;
    }

    #[Pure] public function __toString(): string
    {
        return implode($this->tags);
    }

    public function addTag(string $tag) : void
    {
        $this->tags[] = $tag;
    }

    public function addTags(array $tags) : void
    {
        $this->tags = array_merge($this->tags, $tags);
    }

    private array $tags;
}