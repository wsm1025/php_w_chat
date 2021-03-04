<?php
$dsn = "mysql:host=localhost;dbname=study;charset=utf8";
$user = 'root';
$pass = '980703';
$pdo = new PDO($dsn,$user,$pass);
$pdom = $pdo->query("select id from w_room order by id desc limit 1");//成功得到一个PDOStatement类 失败boolean(false)
$res = $pdom->fetch(PDO::FETCH_ASSOC);
$res['id'] = $res["id"]?$res["id"]:0;
echo "id=".$res["id"];
?>