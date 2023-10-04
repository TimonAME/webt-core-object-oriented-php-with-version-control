<?php

class Vimeo extends video
{
    public function getEmbedCode(): string
    {
        $url = $this->getSource();
        $url = explode("/", $url);
        $url = $url[3];

        return '<iframe src="https://player.vimeo.com/video/'. $url .'?h=cef5015f5e" width="425" height="239" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }
}