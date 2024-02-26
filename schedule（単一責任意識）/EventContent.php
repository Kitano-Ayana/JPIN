<?php

class EventContent
{

    private $content;

    public function __construct(EventContent $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}