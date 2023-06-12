<?php
  
namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;
use SimplifiedMagento\FirstModule\Api\Brightness;
class Pencil implements PencilInterface{
    
    protected $color;
    protected $size;
   //
    protected $brightness;


    public function __construct(Color $color , Size $size, Brightness $brightness){
        $this->color=$color;
        $this->size=$size;
        $this->brightness=$brightness;
        //$this->name=$name;


    }
    public function getPencilType(){

        return "Pencil color is "  .$this->color->getColor()." and pencil size is " .$this->size->getSize();

    }

}