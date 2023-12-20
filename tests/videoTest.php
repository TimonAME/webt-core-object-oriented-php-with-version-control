<?php
require_once 'VideoInterface.php';
require_once 'Video.php';

#Fehler mit phpunit -> warscheindlihc versionsfehler weil nicht für richtige php version
#PHPUnit braucht php version 7.3 welche ich nicht installiert bekommen habe

class ConcreteVideo extends video
{
    public function getEmbedCode(): string
    {
        // TODO: Implement getEmbedCode() method.
        return "sample-embed-code";
    }
}

use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    public function testGetName()
    {
        $video = new ConcreteVideo("Sample Video", "sample-source");
        $this->assertEquals("Sample Video", $video->getName());
    }

    public function testGetSource()
    {
        $video = new ConcreteVideo("Sample Video", "sample-source");
        $this->assertSame("sample-source", $video->getSource());
    }

    public function testConstructor()
    {
        $video = new ConcreteVideo("Sample Video", "sample-source");
        $this->assertInstanceOf(ConcreteVideo::class, $video);
    }
}