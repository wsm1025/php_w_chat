<?php
$dsn = "mysql:host=localhost;dbname=study;charset=utf8";
$user = 'root';
$pass = '980703';
$pdo = new PDO($dsn,$user,$pass);
$pdom = $pdo->query("select * from w_room order by id ");//成功得到一个PDOStatement类 失败boolean(false)
$res = $pdom->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
 print_r($res);
echo "</pre>";
?>