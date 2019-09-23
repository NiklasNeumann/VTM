<?php

namespace VTM;

class Brujah extends Vampire
{
    protected $celerity;
    protected $potence;
    protected $presence;

    public function __construct($_clan, $_description, $_weakness, $_skill_1, $_skill_2, $_skill_3)
    {
        parent::__construct("Brujah", $_description, $_weakness, $_skill_1, $_skill_2, $_skill_3);

        $this->celerity = $_skill_1;
        $this->potence = $_skill_2;
        $this->presence = $_skill_3;
    }

}