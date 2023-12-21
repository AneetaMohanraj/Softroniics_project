<?php
class Product
{
    private $productId;
    private $productName;
    private $price;
    public $product;

    public function __construct($productId,$productName,$price){
        $this->productId=$productId;
        $this->productName=$productName;
        $this->price=$price;

    }

    public function getarray()
    {
        return $this->product;
    }
    public function getname()
    {
        return $this->productName;
    }
    public function getprice()
    {
        return $this->price;
    }
    
}

class Order
{
    private $orderId;
    private $customer;
    private $product_details=[];
    public function __construct($orderId,$customer){
        $this->orderId=$orderId;
        $this->customer=$customer;
    }
    public function addProduct($product,$quantity){
        $this->product_details[]=["product"=>$product,"quantity"=>$quantity];
    }
    public function calculatesum()
    {
        $total=0;
        foreach($this->product_details as $prod)
        {
            $total+=$prod["product"]->getprice()*$prod["quantity"];
        }
        return $total;
    }
    public function displayOrder()
    {
        $total=$this->calculatesum();
        echo "customer name : {$this->customer->getCustomername()}<br>";
        echo "product details : <br>";
        foreach($this->product_details as $val)
        {
            echo "product name : {$val['product']->getname()} ---  quantity : {$val['quantity']} units<br>";
        } 
        echo "total : $total<br>";
    }
}
class Customer
{
    private $customerId;
    private $customerName;
    public function __construct($customerId,$customerName)
    {
        $this->customerId=$customerId;
        $this->customerName=$customerName;
    }
    public function getCustomername()
    {
        return $this->customerName;
    }

}
$p1=new Product('p1','Laptop',3000);
$p2=new Product('p2','mouse',5000);

$cus=new Customer(1,'John Doe');

$order=new Order(101,$cus);
$order->addProduct($p1,3);
$order->addProduct($p2,5);
$order->displayOrder();

?>