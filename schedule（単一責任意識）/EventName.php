<?php

class EventName
{
    private $name;


    public function __construct(EventName $name)
    {
        $this->name = $name;
    }

    public function getNmae()
    {
        return $this->name;
    }
}