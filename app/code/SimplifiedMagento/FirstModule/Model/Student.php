<?php
  
namespace SimplifiedMagento\FirstModule\Model;

class Student {
    
    protected $name;
    protected $age;
    protected $marks;

    public function __construct( $name="Nanaji" ,  $age=24, array $marks = array("maths"=>66,"english"=>70)){
        $this->name=$name;
        $this->age=$age;
        $this->marks=$marks;


    }

}