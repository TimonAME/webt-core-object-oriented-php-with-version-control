<?php

interface VideoInterface
{
    public function getName(): string;

    public function getSource(): string;

    public function getEmbedCode(): string;
}

class video implements VideoInterface
{
    private string $name;
    private string $source;
    private string $embedCode;

    /**
     * @param string $name
     * @param string $source
     * @param string $embedCode
     */
    public function __construct(string $name, string $source, string $embedCode)
    {
        $this->name = $name;
        $this->source = $source;
        $this->embedCode = $embedCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getEmbedCode(): string
    {
        return $this->embedCode;
    }
}