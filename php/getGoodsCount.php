<?php
    header("Content-type:text/html;charset=utf-8");
    $vipName = $_GET["vipName"];

    //创建数据库连接对象；
    $conn=mysql_connect("localhost","root","root");
    // 定义一个空数组；
    $arr=array();
    //连接成功执行
    if($conn){
        // 选择数据库
        mysql_select_db("vans");
        // 获取数据库中的一行；
        $result = mysql_query("select * from shoppingcart where vipName = '$vipName'");
        // 转化为数组
        // $rows = mysql_fetch_array($result);
        //php中打印数组
        while($row=mysql_fetch_array($result)){
            echo $row["goodsId"];
            echo ":";
            echo $row["goodsCount"];
            echo ",";
        }
        // $end=var_dump($rows);
        // echo $end;//string
    }
    mysql_close($conn);
?>