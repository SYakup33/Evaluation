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
}