<?php
    require './personnage.php';
    //Nouveau personnage avec ses stats
    $newPerso = new Personnage("Yakup",5000,2000,1500,2000,[]);
    //var_dump($newPerso);
    $newPerso->addItems("rabadon","cull");
    $newPerso->searchItems("rabadon");
    var_dump($newPerso);