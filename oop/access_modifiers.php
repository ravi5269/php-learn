<?php
//public access modifier 

class Customer
{
	public $name;

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();
$customer->name = 'Bob';
echo $customer->getName(); // Bob



// The private access modifiers

class Customers
{
	private $name;

	public function setName($name)
	{
		$name = trim($name);

		if ($name == '') {
			return false;
		}
		$this->name = $name;

                return true;

	}

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customers();

$customer->setName(' Bob ');
echo $customer->getName();


// protected access 


class MyClass {
    protected $number = 0;
  }
  
  class AnotherClass extends MyClass {
    public function add1() {
      $this->number++;
    }
  
    public function getNumber() {
      return $this->number;
    }
  }
  
  $obj = new AnotherClass();
  $obj->add1();
  echo "The number is " . $obj->getNumber();