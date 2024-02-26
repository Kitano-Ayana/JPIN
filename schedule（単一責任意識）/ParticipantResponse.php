<?php

class ParticipantResponse
{

    private PossibleDates $possibleDates;
    private $responses = [];

    public function __construct(PossibleDates $possibleDates)
    {
        $this->possibleDates = $possibleDates;
    }

    public function addRespomse($date,$name,$willAttend)
    {
        if (!$this->possibleDates->isValidDate($date)) {
            throw new Exception("Date $date is not a valid possible date.");
        }

        if (!isset($this->responses[$date])) {
            $this->responses[$date] = [];
        }

        $this->responses[$date][$name] = $willAttend;

    }

    public function getResponses() {
        return $this->responses;
    }
}