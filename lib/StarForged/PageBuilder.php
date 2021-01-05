<?php


namespace StarForged;


class PageBuilder
{
    public static function BuildFromJson(string $filename) : string
    {
        $data = Extensions::LoadJson($filename);
        return self::UnpackNode($data);
    }

    public static function UnpackNode(array $data) : string
    {
        $contents = "";

        foreach ($data as $key => $value)
        {
            // Type Declaration
            if (ctype_upper($key[0]))
            {
                switch($key[0])
                {
                    case "Block":
                        break;
                    case "Button":
                        break;
                    case "CalloutBlock":
                        break;
                    case "Card":
                        break;
                    case "Cards":
                        break;
                    case "CodeBlock":
                        break;
                    case "CodeLine":
                        break;
                    case "Column":
                        break;
                    case "Document":
                        break;
                    case "Emphasis":
                        break;
                    case "ExternalLink":
                        break;
                    case "Icon":
                        break;
                    case "IconButton":
                        break;
                    case "Image":
                        break;
                    case "ImageLink":
                        break;
                    case "Link":
                        break;
                    case "OrderedList":
                        break;
                    case "Question":
                        break;
                    case "QuestionSection":
                        break;
                    case "Row":
                        break;
                    case "Search":
                        break;
                    case "Section":
                        break;
                    case "SectionBlock":
                        break;
                    case "SideBar":
                        break;
                    case "TitleBlock":
                        break;
                    case "UnorderedList":
                        break;
                    case "Video":
                        break;
                    case "Div":
                        break;
                    case "Iframe":
                        break;
                    case "Resource":
                        break;
                    case "Script":
                        break;
                    case "Span":
                        break;
                    case "Tag":
                        break;
                    case "Text":
                        break;
                    default:
                        die("Unable to Parse: " . $data);
                }
            }
            // Attribute Declaration
            else
            {
                // Parameter Value
                if (is_array($value))
                {

                }
                // Text Value
                else
                {

                }
            }

            self::UnpackNode($value);
        }

        return $contents;
    }
}