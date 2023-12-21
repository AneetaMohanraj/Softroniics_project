<?php
// class MyClass
// {
//     private $product;
//     private $id;
//     private $customer;
//     public function __construct($id,$product,$customer){
//         $this->product=$product;
//         $this->id=$id;
//         $this->customer=$customer;
//     }
// }

// $obj=new MyClass(101,'laptop','anu');


// ---------------------------------------------------------------------------------------------------------------------------------------------------------

// function displayKeys($arr)
// {
//     $keys=array_keys($arr);
//     return $keys;
// }
// $arr=array("apple" => "red", "grape" => "purple", "banana" => "yellow");

// $search= "yellow";
// $key = array_search($search ,$fruits);

// echo $key;


// unset($arr["apple"]);
// print_r($arr);




// class Father
// {
//     private $fathername;
//     private $familyname;
//     public function setFatherDetails($name,$familyname){
//         $this->fathername=$name;
//         $this->familyname=$familyname;
        
//     }
//     public function getFatherName(){
//         echo $this->fathername;
//     }
//     public function getFamilyName(){
//         echo $this->familyname;
//     }
// }
// class Child extends Father
// {
//     private $childName;
//     public function setChildName($name){
//         $this->childName=$name;
//     }
//     public function getChildName(){
//         echo $this->childName;
//     }

// }

// $obj=new Child();
// $obj->setChildName("anu");
// $obj->setFatherDetails("john","shalom");
// $obj->getChildName();
// $obj->getFatherName();
// $obj->getFamilyName();
// 

class ParentClass {
    public function myMethod() {
        echo "This is a method from the parent class.";
    }
}

class ChildClass extends ParentClass {
    // Overriding the method from the parent class
    public function myMethod() {
        echo "This is a method from the child class.";
        
        // Calling the parent class method
        parent::myMethod();
    }
}

// Create an instance of the child class
$childObj = new ChildClass();

// Call the overridden method in the child class
$childObj->myMethod();







?>