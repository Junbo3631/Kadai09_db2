<?php
//XSS対応（ echoする場所で使用！）
// function h($str)
// {
//     return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
// }

//DB接続関数：db_conn() 
//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。
// function db_conn()
// {
//     try {
//         $db_name = '3size_db'; //データベース名
//         $db_id   = 'root'; //アカウント名
//         $db_pw   = ''; //パスワード：MAMPは'root'
//         $db_host = 'localhost'; //DBホスト
//         $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
//         return $pdo;
//     } catch (PDOException $e) {
//         exit('DB Connection Error:' . $e->getMessage());
//     }
// }

// {
//   try {
//     $db_name = 'junbo3631_3size_db';    //データベース名
//     $db_id   = 'junbo3631_3size_db';      //アカウント名
//     $db_pw   = '';      //パスワード：MAMPは'root'
//     $db_host = 'mysql3104.db.sakura.ne.jp'; //DBホスト
//     $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:' . $e->getMessage());
// }
// }

// 
//SQLエラー関数：sql_error($stmt)


//リダイレクト関数: redirect($file_name)


