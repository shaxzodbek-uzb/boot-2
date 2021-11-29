<?php
class Tile {
    public $qattiqlik = 0;
    public function getQattiqlik():int
    {
        return $this->qattiqlik;
    }
}
abstract class DecorativeTile extends Tile{
    public $tile;
    public function __construct(Tile $tile) {
        $this->tile = $tile;
    }
    public function getQattiqlik(): int
    {
        return $this->tile->getQattiqlik() + $this->qattiqlik;
    }
}
class Diamond extends DecorativeTile {
    public $qattiqlik = 4;
    public function getQattiqlik():int
    {
        return $this->tile->getQattiqlik() + $this->qattiqlik;
    }
}

class Polluted extends DecorativeTile {
    public $qattiqlik = -2;

    public function getQattiqlik():int
    {
        return $this->tile->getQattiqlik() + $this->qattiqlik;
    }
}
class Water extends DecorativeTile {
    public $qattiqlik = -5;

    public function getQattiqlik():int
    {
        return $this->tile->getQattiqlik() + $this->qattiqlik;
    }
}

$diamond = new Diamond(new Polluted(new Water(new Tile)));
echo $diamond->getQattiqlik();