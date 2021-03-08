<?php
$dsn = "mysql:host=localhost;dbname=study;charset=utf8";
$user = 'root';
$pass = '980703';
$pdo = new PDO($dsn,$user,$pass);
$row = $pdo->exec("insert w_room(message,nickname,createTime,ip)values('{$_POST['content']}','{$_POST['name']}',now(),'{$_SERVER['REMOTE_ADDR']}')");//成功得到一个PDOStatement类 失败boolean(false)
$id = $pdo->lastInsertId();
if($id>0){
    $data = array ('msg'=>"ok",'status'=>1,'id'=>$id);
}else{
    $data = array ('msg'=>"err",'status'=>0);
}

echo json_encode($data);
?>