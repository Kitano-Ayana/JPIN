<?php


class Total
{

    private int $amount;

    private ?string $type;

    public function __construct($amount, $type = null)
    {

        if($amount == NULL){
           print_r("入力してください");
        }

        if(10000 < $amount ){
            print_r("入力してください");
        }

        $this->amount = $amount;
        $this->type = $type;

    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function isCredit()
    {
        return $this->type == OrderType::CREDIT;
    }

    public function add($target): Total {
        if ($this->type == OrderType::CREDIT) {
            var_dump('通過してます〜');
            return new Total($target->amount - $this->amount,OrderType::DEBIT);
        }
    
        return new Total($this->amount + $target->amount);
    }
    

}