<?php
/**
 * Created by PhpStorm.
 * User: Pedro Artico
 * Date: 22/04/2018
 * Time: 14:26
 */

class Cleaning
{
    public function cleanTAGS($dirtyContent)
    {
        $tags= array ('@<head[^>]*?>.*?</head>@siu', '@<script[^>]*?.*?</script>@siu', '@<object[^>]*?.*?</object>@siu', '@<embed[^>]*?.*?</embed>@siu', '@<applet[^>]*?.*?</applet>@siu', '@<noframes[^>]*?.*?</noframes>@siu', '@<noscript[^>]*?.*?</noscript>@siu', '@<noembed[^>]*?.*?</noembed>@siu','/<header[^>]*>([\s\S]*?)<\/header[^>]*>/', '/<span[^>]*>([\s\S]*?)<\/span[^>]*>/', '/<ul[^>]*>([\s\S]*?)<\/ul[^>]*>/', '/<li[^>]*>([\s\S]*?)<\/li[^>]*>/', '/<iframe[^>]*>([\s\S]*?)<\/iframe[^>]*>/', '/<link[^>]*>([\s\S]*?)<\/link[^>]*>/', '/<form[^>]*>([\s\S]*?)<\/form[^>]*>/', '/<label[^>]*>([\s\S]*?)<\/label[^>]*>/', '/<input[^>]*>([\s\S]*?)<\/input[^>]*>/', '/<button[^>]*>([\s\S]*?)<\/button[^>]*>/', '/(<a[^>]*>)(.*?)(<\/a>)/i', '/<figcaption[^>]*>([\s\S]*?)<\/figcaption[^>]*>/', '/<figure[^>]*>([\s\S]*?)<\/figure[^>]*>/', '/<picture[^>]*>([\s\S]*?)<\/picture[^>]*>/', '/<audio[^>]*>([\s\S]*?)<\/audio[^>]*>/', '/<script[^>]*>([\s\S]*?)<\/script[^>]*>/', '/<table[^>]*>([\s\S]*?)<\/table[^>]*>/', '/<td[^>]*>([\s\S]*?)<\/td[^>]*>/', '/<tr[^>]*>([\s\S]*?)<\/tr[^>]*>/', '/<dl[^>]*>([\s\S]*?)<\/dl[^>]*>/', '/<dt[^>]*>([\s\S]*?)<\/dt[^>]*>/', '/<dd[^>]*>([\s\S]*?)<\/dd[^>]*>/', '/<svg[^>]*>([\s\S]*?)<\/svg[^>]*>/', '/<path[^>]*>([\s\S]*?)<\/path[^>]*>/', '/<image[^>]*>([\s\S]*?)<\/image[^>]*>/', '/<text[^>]*>([\s\S]*?)<\/text[^>]*>/', '/<style[^>]*>([\s\S]*?)<\/style[^>]*>/', '/<base[^>]*>([\s\S]*?)<\/base[^>]*>/', '/<h2[^>]*>([\s\S]*?)<\/h2[^>]*>/', '/<h3[^>]*>([\s\S]*?)<\/h3[^>]*>/', '/<h4[^>]*>([\s\S]*?)<\/h4[^>]*>/', '/<h5[^>]*>([\s\S]*?)<\/h5[^>]*>/', '/<h6[^>]*>([\s\S]*?)<\/h6[^>]*>/', '/<br[^>]*>([\s\S]*?)<\/br[^>]*>/', '/<em[^>]*>([\s\S]*?)<\/em[^>]*>/', '/(<(script|style)\b[^>]*>).*?(<\/\2>)/is', '/<footer[^>]*>([\s\S]*?)<\/footer[^>]*>/');
        $tagsAfterClean=  preg_replace($tags, "", $dirtyContent);
        return strip_tags($tagsAfterClean,"");
    }

    public function removeWhiteSpace($content)
    {
        return preg_replace('/\s+/', ' ', $content);
    }

    public function cleanContent($dirty)
    {
        return $this->removeWhiteSpace($this->cleanTags($dirty));
    }
}