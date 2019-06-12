<?php
header("Content-type:text/html;charset=utf-8");
$userId=$_POST["userId"];
$userPass=$_POST["userPass"];

//创建数据库连接对象；
$conn=mysql_connect("localhost","root","root");
if($conn){
    mysql_select_db("vans");
    $result = mysql_query("select * from userinfo where userId = '$userId'");
    $rows = mysql_num_rows($result);
    if($rows==1){
        echo "2";
    }else{
        if($conn){
            mysql_select_db("vans");
            mysql_query("insert into userinfo values($userId,$userPass)",$conn);
            echo "1";
        }else{
            echo "0";
        }
    }
}
mysql_close($conn);
?>