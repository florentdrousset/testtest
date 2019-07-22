<?php

class Guerrier extends Personnage {
    //Un guerrier aura 2 fois plus de pdv qu'un personnage normal
    public function  __construct($name) {
        $this->hp = parent::getHp() * 2;
        $this->name = $name;
    }

    public function sePresenter() {
        echo "Je m'appelle ". $this->name . " et je suis un guerrier.";
    }
}