<?php

class Teacher {
    // content
    protected $name;
    protected $spes;
    protected $birth_date;
    
    public function __construct(string $name, string $birth_date, string $spes) {
        $this->name = $name;
        $this->birth_date = $birth_date;
        $this->spes = $spes;
    }
    //getter
    public function getName()
    {
        return $this->name;
    }
    //setter
    public function setName($name)
    {
        $this->name = $name;
    }
    //getter
    public function getSpes()
    {
        return $this->spes;
    }
    //setter
    public function setSpes($spes)
    {
        if(in_array($spes, ['IT', 'Math', 'Phisics'])){
            $this->spes = $spes;
        }
    }
    // function* 
    function sleep(): string
    {
        return 'shaxzod';
    }

    // procedure
    function go()
    {
        // go home
    }

}

$teacher = new Teacher('Shaxzodbek', '2003', 'IT');
$teacher->setSpes('History');
var_dump($teacher->getSpes());
var_dump(DB::getInstance());