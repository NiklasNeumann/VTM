<?php

namespace VTM;

class Brujah extends Vampire
{
    protected $clan = "Brujah";
    protected $description = "Quick to anger and always passionate in the Modern Nights, they have been regaining their position as a clan of lofty philosophers and activists and are often pointed to as a clan of unruly rebels and roughnecks that should not be messed with.";
    protected $weakness = "Difficulty to resist frenzies.";
    protected $celerity = "Celerity allows the Kindred to move at an incredible speed.";
    protected $potence = "Potence grants a Vampire supernatural strength.";
    protected $presence = "Presence weakens surrounding groups of people, mostly without them noticing it.";

    public function setBrujah($_clan, $_description, $_weakness, $_skill_1, $_skill_2, $_skill_3)
    {
        $this->clan = $_clan;
        $this->description = $_description;
        $this->weakness = $_weakness;
        $this->celerity = $_skill_1;
        $this->potence = $_skill_2;
        $this->presence = $_skill_3;
    }
}