<?php
class Menu
{
    
    public function choose($choice1)
    {
        switch($choice1)
        {
            case 1:$this->addmenu();
            break;
            case 2:$this->submenu();
            break;
            case 3:exit();
            break;
            default:echo "invalid choice ";
        }
}}
class Add extends Menu
{
    public function addmenu()
    {
        echo "Choose an option : \n";
        echo "1.perform operation\n2.exit\n";
        $choice2=trim(fgets(STDIN));
        switch($choice2)
        {
            case 1:$this->performadd();
            break;
            case 2:exit();
            break;
            default:echo "invalid choice";
            
        }
    }
    public function performadd()
    {
        $first=(float)readline("Enter the first :");
        echo "enter the second : ";
        $second=trim(fgets(STDIN));
        $result = $first+$second;
        echo "Choose an option : \n";
        echo "1.Addition\n2.Subtraction\n3.Exit\n";
        $choice1=trim(fgets(STDIN));
        switch($choice1)
        {
            case 1:
                $this->choose($choice1);
                break;
            case 2:
                $obj2=new Sub();
                $obj2->choose($choice1);  
                break;
            default:echo "Invalid choice";      
        }

    }

}
class Sub extends Menu
{
    public function submenu()
    {
        echo "Choose an option : \n";
        echo "1.perform operation\n2.exit\n";
        $choice2=trim(fgets(STDIN));
        switch($choice2)
        {
            case 1:$this->performsub();
            break;
            case 2:exit();
            break;
            default:echo "invalid choice";
            
        }
    }
    public function performsub()
    {
        $first=(float)readline("Enter the first :");
        echo "enter the second : ";
        $second=trim(fgets(STDIN));
        $result = $first-$second;
        echo "Result = $result \n";
        echo "Choose an option : \n";
        echo "1.Addition\n2.Subtraction\n3.Exit\n";
        $choice1=trim(fgets(STDIN));
        switch($choice1)
        {
            case 1:
                $obj2=new Add();
                $obj2->choose($choice1);
                break;
            case 2:
                $this->choose($choice1);  
                break;
            default:echo "Invalid choice";      
        }

    }

}
echo "Choose an option : \n";
echo "1.Addition\n2.Subtraction\n3.Exit\n";
$choice1=trim(fgets(STDIN));
switch($choice1)
{
    case 1:
        $obj1=new Add();
        $obj1->choose($choice1);
        break;
    case 2:
        $obj2=new Sub();
        $obj2->choose($choice1);  
        break;
    default:echo "Invalid choice";      
}

$obj1=new Add();
$obj1->choose();
// $obj2=new Sub();
// $obj2->choose();
?>