<?php

class YouTube extends video
{
    public function getEmbedCode(): string
    {
        $url = $this->getSource();
        $url = explode("=", $url);
        $url = $url[1];
        $url = explode("&", $url);
        $url = $url[0];

        return '<iframe width="425" height="239" src="https://www.youtube.com/embed/'. $url .'?si=SYnqHCS3H4vbLj0D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';}
}