<?php

class Personnage {

    public $name;
    protected $hp = 30;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getHp() {
        return $this->hp;
}

    public function sePresenter() {
        echo "<br> Je m'appelle " . $this->name. "<br>";
}

}