<?php


namespace StarForged;


class CodeBlock
{
    public function __construct(string $title, string $codeType, string $content, bool $loadContentFromFile = false)
    {
        if ($loadContentFromFile)
        {
            $content = htmlentities(file_get_contents($content));
        }

        $html = <<<HTML
<div class="code-block">
    <h6>$title</h6>
    <pre><code class="$codeType">$content</code></pre>
</div><!--//code-block-->
HTML;

        echo $html;
    }
}