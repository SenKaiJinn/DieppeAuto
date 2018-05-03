<?php


trait Consommer
{
    protected $charge;

    public function calculerResteBatterie()
    {
        return $this->charge;
    }
    public function nombreChargesBatterie()
    {
        return $this->nbrCharges;
    }
}