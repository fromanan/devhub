<?php


namespace StarForged;


use StarForged\Tags\Div;

class Document
{
    public static function SidebarDocument(Site& $site, string $name, string $body, string $sidebarFile) : string
    {
        $content = new Block();
        $inner = new Div($body, ["content-inner"]) . "<!--//content-inner-->";
        $content->addTag(new Column($inner, ["doc-content", "col-md-9", "col-12", "order-1"])) . "<!--//doc-content-->";
        $content->addTag(new Column(new SideBar($sidebarFile), ["doc-sidebar", "col-md-3", "col-12", "order-0", "d-none", "d-md-flex"]));

        $document = new Block();
        $document->addTag(Document::Header($site, $name));
        $document->addTag(new Div($content, ["doc-body", "row"]) . "<!--//doc-body-->");
        return new Div(new Div($document, ["container"]). "<!--//container-->", ["doc-wrapper"]) ."<!--//doc-wrapper-->";
    }

    public static function Header(Site& $site, string $name) : string
    {
        $title = $site->getIcon($name) . "&nbsp;" . $site->getTitle($name);
        $date = $site->getLastUpdateDate($name);
        return new TitleBlock($date, $title, "doc-header", ["doc-header", "text-center"], titleClasses:["doc-title"]);
    }
}