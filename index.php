<?php
class Person{
    protected $bornDateObj;

    public function __construct($bornDate){
        $this->bornDateObj = DateTime::createFromFormat('Y-m-d', $bornDate);
    }

    public function getBday(){
        return $this->bornDateObj;
    }

    public function HowOld(){
        $today = new DateTime(date('Y-m-d'));
        $howOldObj =  $this->getBday()->diff($today);
        return [
            'years' => $howOldObj->y,
            'months' => $howOldObj->m,
            'days' => $howOldObj->d
        ];
    }

    public function getOld(){
        $howOld = $this->HowOld();
        return $howOld['years'] . ' years '. $howOld['months'] .' months ' . $howOld['days'] . ' days ';
    }
}

$person = new Person(readline('Enter age in YYYY-MM-DD format: '));
echo $person->getOld();