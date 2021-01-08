<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Nicolas';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    //Attributs
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;

    //Constructeur
    public function __construct($id){
        $this->id = $id;
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;

    }

    //Méthodes
    public function setWeapon(Weapon $weapon){
        $this->weapon = $weapon;
    }
    public function setImageUrl($url){
        $this->imageUrl = $url;
    }
}
class StarTrekWarrior extends Warrior {
    //Attributs
    public $mentalPower;

    //Constructeur
    public function __construct($id){
        parent::__construct($id);
        $this->mentalPower = 8;
    }

    //Méthodes
    public function power(){
        return $this->mentalPower;
    }
}

class MarvelWarrior extends Warrior {
    //Attributs
    public $superPower;

    //Constructeur
    public function __construct($id){
        parent::__construct($id);
        $this->superPower = 100;
    }

    //Méthodes
    public function power(){
        return $this->superPower;
    }
}
class PokemonWarrior extends Warrior {
    //Attributs
    public $level;

    //Constructeur
    public function __construct($id){
        parent::__construct($id);
        $this->level = 1;
    }

    //Méthodes
    public function power(){
        return $this->level;
    }
}
class Weapon{
    //Attributs
    public $id;
    public $strength;
    public $imageUrl;

    //Constructeur
    public function __construct($id, $strength){
        $this->id = $id;
        $this->strength = $strength;
    }

    //Méthodes
    public function setImageUrl($url){
        $this->imageUrl = $url;
    }

}
