<?php


namespace StarForged;


class SideBar extends HtmlObject
{
    /**
     * SideBar constructor.
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $pageData = Extensions::LoadJson($filename);
        $this->buildHtml($pageData);
    }

    public function buildHtml(array $pageData) : void
    {
        $html = "<div id=\"doc-nav\" class=\"doc-nav\">";
        $html .= "<nav id=\"doc-menu\" class=\"nav doc-menu flex-column sticky\">";
        foreach ($pageData as $section => $value)
        {
            $html .= "<a class=\"nav-link scrollto\" href=\"" . $value['link'] . "\">" . $section . "</a>";

            if (array_key_exists('sublinks', $value))
            {
                $html .= "<nav class=\"doc-sub-menu nav flex-column\">";

                foreach ($value['sublinks'] as $sublink => $link)
                {
                    $html .= "<a class=\"nav-link scrollto\" href=\"" . $link . "\">" . $sublink . "</a>";
                }

                $html .= "</nav>";
            }
        }
        $html .= "</nav><!--//doc-menu-->";
        $html .= "</div>";
        $this->html = $html;
    }
}