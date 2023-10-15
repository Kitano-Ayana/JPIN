<?php


class Total
{

    private int $amaount;

    private DealType $type;

    public function __construct($amaount, DealType $type = null)
    {

        if($amaount == NULL){
            throw new IntlException();
        }

        if(10000 < $amaount ){
            throw new IntlException();
        }

        $this->amaount = $amaount;
        $this->type = $type;


    }

    public function getTotal()
    {
        return $this->amaount;
    }

    public function isCredit()
    {
        return $this->type = DealType::CREDIT;
    }

    public function add($target)
    {
        if($target->type == DealType::CREDIT){
            return new Total($this->amaount - $target->amount);
        }

        return new Total($this->amaount + $target->amount);
    }


}