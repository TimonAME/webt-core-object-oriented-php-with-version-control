<?php

class YouTube extends video
{
    public function getEmbedCode(): string
    {
        $url = $this->getSource();      #https://www.youtube.com/watch?v=5WM9XCnxckM&t=483s&ab_channel=AutoTopNL
        $url = explode("=", $url);
        $url = $url[1];                 #5WM9XCnxckM&t
        $url = explode("&", $url);
        $url = $url[0];                 #5WM9XCnxckM

        #richtiger teil der url wird in iframe eingefügt
        # width="425" height="239"
        return '<iframe src="https://www.youtube.com/embed/'. $url .'?si=SYnqHCS3H4vbLj0D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';}
}