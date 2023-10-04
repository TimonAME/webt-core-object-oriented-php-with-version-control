<?php

interface VideoInterface
{
    public function getName(): string;

    public function getSource(): string;

    public function getEmbedCode(): string;
}