<?php

interface VideoInterface
{
    #functionen die umgesetzt werden müssen
    public function getName(): string;

    public function getSource(): string;

    public function getEmbedCode(): string;
}