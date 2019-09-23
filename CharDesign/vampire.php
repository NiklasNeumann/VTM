<?php

namespace VTM;

class Vampire
{
    protected $name;
    protected $gender;

    protected $clan;
    protected $description;
    protected $weakness;
    protected $skill_1;
    protected $skill_2;
    protected $skill_3;

    public function __construct($_clan, $_description, $_weakness, $_skill_1, $_skill_2, $_skill_3)
    {
        $this->clan = $_clan;
        $this->description = $_description;
        $this->weakness = $_weakness;
        $this->skill_1 = $_skill_1;
        $this->skill_2 = $_skill_2;
        $this->skill_3 = $_skill_3;
    }

    public function name()
    {
        return $this->name;
    }

    public function gender()
    {
        return $this->gender;
    }

    public function clan()
    {
        return $this->clan;
    }

    public function description()
    {
        return $this->description;
    }

    public function weakness()
    {
        return $this->weakness;
    }


    public function skills()
    {
        return "$this->skill_1  $this->skill_2  $this->skill_3";
    }

    public function output()
    {
        echo "Name: $this->name \n Gender: $this->gender \n Clan: $this->clan \n Description: $this->description \n";
    }
}