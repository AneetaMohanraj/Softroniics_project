<?php
function mostTransaction($trans,$acc){
    $cus=array_column($trans,'cusid');
    $num=array_count_values($cus);
    $max=0;
    foreach($num as $key=>$value)
    {
        if($value>$max){
            $max=$value;
            $v=$key;
        }
    }
    echo "most no.of transaction done by : ";
    foreach($acc as $row){
        foreach($row as $key=>$value){
            if($value==$v)
            {
                echo " {$row['name']} - Balance is {$row['balance']}";
            }
        }
    }
    
}

function mostDeposit($trans,$acc){

    $max=0;
    $keys=[];
    foreach($trans as $row){
        foreach($row as $key=>$value){
            if($value=='deposit')
            {
                $ex[]=["{$row['cusid']}"=>"$value"];
            }
        }
    }
    
    foreach($ex as $row)
    {
        foreach($row as $key=>$value){
            array_push($keys,$key);
        }
    }
    // echo implode(", ",$keys);
    $num=array_count_values($keys);

    foreach($num as $key=>$value)
    {
        if($value>$max){
            $max=$value;
            $v=$key;
        }
    }
    echo "most deposits done by : $v";
    
}

function mostWithdrawal($trans,$acc){

    $max=0;
    $keys=[];
    foreach($trans as $row){
        foreach($row as $key=>$value){
            if($value=='withdrawal')
            {
                $ex[]=["{$row['cusid']}"=>"$value"];
            }
        }
    }
    
    foreach($ex as $row)
    {
        foreach($row as $key=>$value){
            array_push($keys,$key);
        }
    }
    // echo implode(", ",$keys);
    $num=array_count_values($keys);

    foreach($num as $key=>$value)
    {
        if($value>$max){
            $max=$value;
            $v=$key;
        }
    }
    echo "most withdrawals done by : $v";
    
}











$account=array(
    array("cusid"=>101,"name"=>"anu","balance"=>20000,"account_type"=>"savings"),
    array("cusid"=>102,"name"=>"raju","balance"=>3000,"account_type"=>"checking"),
    array("cusid"=>103,"name"=>"john","balance"=>null,"account_type"=>"savings"),
    array("cusid"=>104,"name"=>"ebi","balance"=>1000,"account_type"=>"investment"),
    array("cusid"=>105,"name"=>"vighnesh","balance"=>1000,"account_type"=>"checking"),

);

$transaction=array(
    array("cusid"=>101,"amount"=>5000,"transaction_type"=>"withdrawal"),
    array("cusid"=>101,"amount"=>4000,"transaction_type"=>"withdrawal"),
    array("cusid"=>101,"amount"=>5000,"transaction_type"=>"deposit"),
    array("cusid"=>102,"amount"=>500,"transaction_type"=>"deposit"),
    array("cusid"=>102,"amount"=>5000,"transaction_type"=>"deposit"),
    array("cusid"=>103,"amount"=>5000,"transaction_type"=>"deposit"),
    array("cusid"=>103,"amount"=>300,"transaction_type"=>"withdrawal"),
    array("cusid"=>104,"amount"=>5000,"transaction_type"=>"deposit"),
    array("cusid"=>105,"amount"=>5000,"transaction_type"=>"deposit"),
);

mostTransaction($transaction,$account);
echo "<br>";
mostDeposit($transaction,$account);
echo "<br>";
mostWithdrawal($transaction,$account);
echo "<br>";
?>