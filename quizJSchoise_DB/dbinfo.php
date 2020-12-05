<?php
  //ローカル:3〜16行目を使用　本番:18〜25行目を使用
  /* define('DB_HOST', 'mysql');
  define('DB_USER', 'default');
  define('DB_PASSWORD', 'root');
  define('DB_NAME', 'mysql');
  try {
    $dsn = 'mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8;';
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  }
  catch(PDOException $e){
    print('接続エラーが発生しました。:'.$e->getMessage());
    exit;
  } 
*/

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$db_host = $url["host"];
$user = $url["user"];
$password = $url["pass"];
$db_name = substr($url["path"], 1);

$dsn = 'mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8mb4;';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
?>