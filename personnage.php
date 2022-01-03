<?php
    class Personnage {
        public $name;
        private $hp;
        private $attack;
        private $defense;
        private $mana;
        public $items;
    
    public function __construct(
        $name,
        $hp,
        $attack,
        $defense,
        $mana,
        $items
    ) {
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
        $this->items = $items;
    }
    public function getAll () {
        return $this->hp;
        return $this->attack;
        return $this->defense;
        return $this->mana;
    }
    public function setHp ($parametre) {
        $this->hp = $parametre;
    }
    public function setAttack ($parametre) {
        $this->attack = $parametre;
    }
    public function setMana ($parametre) {
        $this->mana = $parametre;
    }
    public function setItems ($parametre) {
        $this->items = $parametre;
    }
    public function afficher_stats(){
        echo "Voici mon personnage et ses stats : \n \n";
        echo "name : ". $this->name.  ". \n";
        echo "hp : ". $this->hp.  " hp. \n";
        echo "attack : ". $this->attack.  " dmg. \n";
        echo "defense : ". $this->defense.  " def. \n";
        echo "mana : ". $this->mana.  " mana. \n";
        echo "items : ". $this->items.  " items. \n";
    }
    public function addItems ($items1,$items2) {
        array_push($this->items,"$items1","$items2");
        }
    public function searchItems($item) {
        $test = [array_search($item,$this->items)];
        if($test==false){
            return false;
        } else if($test==true){
            return $item;
        }
    }
}