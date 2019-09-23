<?php

namespace VTM;

class Gangrel extends Vampire
{
    protected $clan = "Gangrel";
    protected $description = "Nomads who hold closer ties to the wild places than most of their city-bound cousins, they are also closer to the animal aspect of the Beast, and are masters of the Protean Discipline.";
    protected $weakness = "Gains an permanent animalistic feature everytime the vampire frenzies.";
    protected $animalism = "Allows the Vampire to communicate with nearby animals and the beast within.";
    protected $fortitude = "Grants the Kindred an incredible resistence against physical force, fire and even the sun.";
    protected $protean = "Uses the close relationship to the beast within to gain animalistic features.";

    public function __construct($_clan, $_description, $_weakness, $_skill_1, $_skill_2, $_skill_3)
    {
        $this->clan = $_clan;
        $this->description = $_description;
        $this->weakness = $_weakness;
        $this->animalism = $_skill_1;
        $this->fortitude = $_skill_2;
        $this->protean = $_skill_3;
    }
}