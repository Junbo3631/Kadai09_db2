<?php

$id    = $_GET['id'];

// include("funcs.php");
// $pdp = db_conn();

// var_dump($id);
//2. DB接続します
//*** function化する！  *****************

// require_once('funcs.php');
// $pdo = db_conn();
// try {
//     $db_name = '3size_db'; //データベース名
//     $db_id   = 'root'; //アカウント名
//     $db_pw   = ''; //パスワード：MAMPは'root'
//     $db_host = 'localhost'; //DBホスト
//     $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:' . $e->getMessage());
// }
try {
    $db_name = 'junbo3631_3size_db';    //データベース名
    $db_id   = 'junbo3631_3size_db';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'mysql3104.db.sakura.ne.jp'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}
//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM 3size_table  WHERE id =:id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: select.php');
    exit();
}
