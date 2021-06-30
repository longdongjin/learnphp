<?php
/*//使用array()创建一个数组
$cars = array("Volvo", "BMW", "Toyota");

//获取数组长度
echo count($cars);

//遍历数组
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i];
    echo "<br>";
}

//关联数组
$age = array("Peter" => "35","Ben" => "37","Joe" => "43");

//遍历关联数组
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}*/

//数组排序
//数字数组升序排序sort();
//$cars = array("Volvo","BMW","Toyota");
//$countLength = count($cars);
//for($x = 0; $x < $countLength; $x++){
//    echo $cars[$x];
//    echo "<br>";
//}

//数字数组降序排序
//$numbers = array(4,6,2,22,11);
//rsort($numbers);
//for($i = 0; $i < count($numbers);$i++)
//{
//    echo $numbers[$i] . "<br>";
//}

//键对值数组升序
//根据值进行升序排序
//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//asort($age);
//foreach($age as $k=>$v)
//{
//    echo $v . "<br>";
//}
//
//echo "-----------------" . '<br>';
//根据键进行升序排序
//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//ksort($age);
//foreach($age as $key=>$value)
//{
//    echo $value . "<br>";
//}


//键对值数组降序
//根据值进行降序排序
//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//arsort($age);
//foreach ($age as $item=>$value) {
//    echo $value."<br>";
//}

//根据键进行降序排序
//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//krsort($age);
//foreach ($age as $key=>$v) {
//    echo $v."<br>";
//}