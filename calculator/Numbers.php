<?php

class Numbers
{

    private array $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $numbers;

    }

    public function getPriority($numbers)
    {
        //原理はショッピングカートと似ていると思う（使用したものを省く、&計算したものはnew Totalに入れる
        $i = 0;
        foreach ($numbers as $number) {

            if($number == '*'){
                $aa = new Multi();
                $aa->execute($numbers[$i-1],$numbers[$i+1]);

            }

            if($number == '/'){
                $aa = new division();
                $aa->execute($numbers[$i-1],$numbers[$i+1]);
            }
            $i ++;
        }

    }



}