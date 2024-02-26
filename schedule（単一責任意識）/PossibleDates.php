<?php

class PossibleDates
{

    private $dates = [];

    public function __construct($dates) {
        $this->dates = $dates;
    }

    public function getDates() {
        return $this->dates;
    }

    public function isValidDate($date) {
        return in_array($date, $this->dates);
    }
}