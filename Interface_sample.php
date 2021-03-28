<?php

interface Pokemon {
    public function attack();
}

class Pikachu implements Pokemon {

    public function attack()
    {
        echo "電気ショック！！\r\n";
    }
}

class Hitokage implements Pokemon {

    public function attack()
    {
        echo "ひのこ！！\r\n";
    }
}

/** @var  Pokemon */
$pikachu = new Pikachu();

/** @var  Pokemon */
$hitokage = new Hitokage();

$pikachu->attack();

$hitokage->attack();