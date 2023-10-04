<?php
require_once 'VideoInterface.php';
abstract class video implements VideoInterface
{
    private string $name;
    private string $source;
    /**
     * @param string $name
     * @param string $source
     */
    public function __construct(string $name, string $source)
    {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): string
    {
        return $this->source;
    }
}