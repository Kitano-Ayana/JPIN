<?php

class Main
{
    //タスクを作る
    public function main()
    {
        try {
            $event = new Event("お花見に行こう！", "一緒にお花見に行きましょう。これはテストです。", 1, ["2024-04-01", "2024-04-03", "2024-04-06"]);
            $event->addParticipant("2024-04-01", "田中", true);
            $event->addParticipant("2024-04-01", "佐藤", false);
            $event->addParticipant("2024-04-03", "鈴木", true);
            // さらに参加者を追加...
            
            // $eventの情報を利用して何かをする...
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
   
   
}