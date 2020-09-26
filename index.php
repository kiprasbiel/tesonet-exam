<?php
class Person{
    private $bornDateObj;

    public function __construct($bornDate){
        $this->bornDateObj = DateTime::createFromFormat('Y-m-d', $bornDate);
    }

    public function getBday(){
        return $this->bornDateObj;
    }

    private function HowOld(){
        $today = new DateTime(date('Y-m-d'));
        $howOldObj =  $this->getBday()->diff($today);
        return [
            'years' => $howOldObj->y,
            'months' => $howOldObj->m,
            'days' => $howOldObj->d
        ];
    }
}

$person = new Person(readline('Enter age in YYYY-MM-DD format: '));