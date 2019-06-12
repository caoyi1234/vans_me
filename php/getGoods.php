<?php
    header("Content-type:text/html;charset=utf-8");
    $goodsId = $_GET["goodsId"];

    //创建数据库连接对象；
    $conn=mysql_connect("localhost","root","root");
    // 定义一个空数组；
    $arr=array();
    //连接成功执行
    if($conn){
        // 选择数据库
        mysql_select_db("vans");
        // 获取数据库中的一行；
        $result = mysql_query("select * from goodsinfo where goodsId = '$goodsId'");
        // 转化为数组
        $rows = mysql_fetch_array($result);
        //php中打印数组
        $end=var_dump($rows);
        echo $end;//string
    }
    mysql_close($conn);
?>