<?php

class Vimeo extends video
{
    public function getEmbedCode(): string
    {
        $url = $this->getSource();          #https://vimeo.com/869687763
        $url = explode("/", $url);
        $url = $url[3];                     #869687763

        #richtiger teil der url wird in iframe eingefügt
        # width="425" height="239"
        return '<iframe src="https://player.vimeo.com/video/'. $url .'?h=cef5015f5e" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }
}