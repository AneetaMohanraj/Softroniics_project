<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "enter a option <br> 1 :Addition <br> 2:Exit";
$o=trim(fgets(STDIN));


	class calculator{
 	public $option;
		public function choice($o){
		$this->option=$o;
		switch($this->option){
			case 1:	// confirmation functionilek povanam	 
				$this-> confirmation();
				break;
			case 2:
				echo " exit";
			default:
				echo "invald number";
				$obj->choice();
		}
		}
public function confirmation(){
		echo "do you want to continue with addition ";
			echo "1 :YES";
			echo "2 :NO";

			$Confirm=trim(fgets(STDIN));

		if($Confirm==1){ // addition function lekk povanam
			// $V=new values();
            
            $A=new addition();
            $A->values();
			$A->add();
		}else if ($Confirm==2){ // exit function lekk povanam
			echo "exit";
		}else {
			echo " enter a valid number"; //  confirmation function onnude start cheyyanm
			$obj->confirmation();
			}
	
}
			
} // class close



class numbers{

	public $number1;
	public $number2;
	public $result;
}
class values extends numbers {
	function values(){
		echo "enter first number";
		$this->number1=trim(fgets(STDIN));
		echo " enter second number";
		$this->number2=trim(fgets(STDIN));
	}
	
}

class addition extends values{

	function add(){
	$this->result=$this->number1+$this->number2;
	echo " result : {$this->result}" ;

}
}
$obj=new calculator();
$obj->choice($o);


$V=new values();

$A=new addition();


?>
</body>
</html>