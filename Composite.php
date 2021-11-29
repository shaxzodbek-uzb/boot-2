<?php

abstract class Birlik{
    public $strength;
    
    abstract public function addAskar(Birlik $askar);
    abstract public function getStrength():int;
};
class Oqchi extends Birlik{
    public $strength = 2;
    public function addAskar(Birlik $askar)
    {
        throw new \Exception('QO\'shish mumkin emas!');
    }
    public function getStrength():int
    {
        return $this->strength;
    }
}

class Desant extends Birlik{
    public $strength = 3;
    public function addAskar(Birlik $askar)
    {
        throw new \Exception('QO\'shish mumkin emas!');
    }
    public function getStrength():int
    {
        return $this->strength;
    }
}
class BTR extends Birlik {
    public $askarlar = [];
    public function addAskar(Birlik $askar)
    {

        $this->askarlar[] = $askar;
    }
    public function getStrength(): int
    {
        $result = 0;
        foreach ($this->askarlar as $askar) {
            $result = $result + $askar->getStrength();
        }
        return $result;
    }
}
class Armiya extends Birlik {
    public $askarlar = [];
    public function addAskar(Birlik $askar)
    {
        $this->askarlar[] = $askar;
    }
    public function getStrength(): int
    {
        $result = 0;
        foreach ($this->askarlar as $askar) {
            $result = $result + $askar->getStrength();
        }
        return $result;
    }
}

$oqchi = new Oqchi;
$desant = new Desant;
$desant1 = new Desant;
$desant2 = new Desant;
echo "O'qchi kuchi: {$oqchi->getStrength()}\n";
echo "Desant kuchi: {$desant->getStrength()}\n";

$armiya = new Armiya;
$btr = new BTR;
$armiya->addAskar($oqchi);
$btr->addAskar($desant);
$btr->addAskar($desant1);
$btr->addAskar($desant2);
$armiya->addAskar($btr);
echo "BTR kuchi: {$btr->getStrength()}\n";
echo "Armiya kuchi: {$armiya->getStrength()}\n";