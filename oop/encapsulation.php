<?php 
class class1 {
    
    /*
    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class
     */


    // public  
    // protected $number;
    private $number;
    function __construct() {
        echo    $this->number = 12345;
    }

    //getter and setter

    function setVal() {
        $this->number = 1000;
    }
    function getVal() {
        return $this->number;
    }

    
}

$obj = new class1();
echo $obj->setVal();
echo $obj->getVal();


class class2 extends class1 {
    // "access Protected";
    //but private me access ni kr skte hai 
}