<?php
$dsn = "mysql:host=localhost;dbname=study;charset=utf8";
$user = 'root';
$pass = '980703';
$pdo = new PDO($dsn,$user,$pass);
$pdos = $pdo->query("select id from w_room order by id desc limit 1");//成功得到一个PDOStatement类 失败boolean(false)
$rex = $pdos->fetch(PDO::FETCH_ASSOC);
$lastId = $rex["id"]?$rex["id"]:0;
$length = $lastId - $_GET['id'];

$pdom = $pdo->query("select *  from w_room  ORDER BY id asc limit {$_GET['id']},$length");//成功得到一个PDOStatement类 失败boolean(false)
$res = $pdom->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
?>