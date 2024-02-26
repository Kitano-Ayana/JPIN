<?php

class  Event
{

    private $title;
    private $content;
    private $status;

    private $dates; // 日付と参加者の情報を保持する連想配列

    public function __construct($title, $content, $status, $dates)
    {
        $this->validateTitle($title);
        $this->validateContent($content);
        $this->validateStatus($status);
        $this->dates = [];
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
        $this->setDates($dates);
    }

    private function validateTitle($title)
    {
        if (mb_strlen($title) > 100) {
            throw new Exception("Title must be 100 characters or less.");
        }
    }

    private function validateContent($content)
    {
        if (mb_strlen($content) > 200) {
            throw new Exception("Content must be 200 characters or less.");
        }
    }

    private function validateStatus($status)
    {
        if (!is_numeric($status)) {
            throw new Exception("Status must be a number.");
        }
    }

    private function setDates($dates)
    {
        foreach ($dates as $date) {
            if (!$this->validateDate($date)) {
                throw new Exception("Invalid date format in dates array. Please use 'YYYY-MM-DD' for each date.");
            }
            // 各日付をキーとし、初期値として空の参加者リストを設定
            $this->dates[$date] = [];
        }
    }

    public function addParticipant($date, $name, $willAttend)
    {
        if (!isset($this->dates[$date])) {
            throw new Exception("Date does not exist: $date");
        }
        $this->dates[$date][] = [
            'name' => $name,
            'willAttend' => $willAttend
        ];
    }

    private function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }


}