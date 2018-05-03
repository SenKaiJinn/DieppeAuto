<?php


class Berline extends Voitures implements Consommation
{
    public function peindre ($color)
{
    $this->couleur = $color;
}
    public function distanceFreinage()
    {
        echo "Je freine , c'est génial";

    }
    public function polluer ()
    {

    }



}
