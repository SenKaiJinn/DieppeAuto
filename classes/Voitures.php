<?php


abstract class voitures
{
    protected $couleurDominante;
    protected $masse;
    protected $marque;
    protected $modele;
    protected $vitesse;

    public function __construct($mark,$model)
    {
        $this->marque = $mark;
        $this->modele = $model;

    }
    public function calculerQteMouvement()
    {
        return $this->masse  * $this->vitesse;
    }
    abstract public function distanceFreinage();
}