<?php


class SUVElectrique extends Voiture
{
    use Consommer;
    public function afficherCharge ()
    {
        return $this->charge;
    }
}