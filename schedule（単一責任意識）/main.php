<?php

class Main
{
   // 使用例
    $possibleDates = new PossibleDates(["2024-04-01", "2024-04-03", "2024-04-06"]);
    $participantResponse = new ParticipantResponse($possibleDates);

    $participantResponse->addResponse("2024-04-01", "田中", true);
   
   
}