<?php


namespace StarForged;


use StarForged\Tags\Tag;

class Icon extends HtmlObject
{
    /**
     * Icon constructor.
     * @param string $iconType
     * @param string $iconStyle
     * @param bool $large
     */
    public function __construct(string $iconType, string $iconStyle="fas", bool $large=false)
    {
        $classes = $large ? ["icon", $iconStyle, $iconType] : [$iconStyle, $iconType];
        $this->html = new Tag(Tag::ICON, "", $classes);
    }

    #region IconTypes
    const LINK = "fa-link";
    const DOWNLOAD = "fa-download";
    const CODE_BRANCH = "fa-code-branch";
    const PLAY_CIRCLE = "fa-play-circle";
    const BUG = "fa-bug";
    const EXCLAMATION_CIRCLE = "fa-exclamation-circle";
    const INFO_CIRCLE = "fa-info-circle";
    const THUMBS_UP = "fa-thumbs-up";
    const EXCLAMATION_TRIANGLE = "fa-exclamation-triangle";
    const QUESTION_CIRCLE = "fa-question-circle";
    const SEARCH = "fa-search";
    const CLOCK = "fa-clock";
    const CLOUD_ALT = "fa-cloud-download-alt";
    #endregion

    #region IconStyles
    const FAR = "far";
    const FA = "fa";
    const FAS = "fas";
    #endregion
}