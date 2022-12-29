<?php
//DB接続
function db_conn(){
  require_once 'vendor/autoload.php';
  $db = new Illuminate\Database\Capsule\Manager;
  $db->addConnection([
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'eloquent',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_general_ci',
      'prefix'    => '',
  ]);
  $db->setAsGlobal();
  $db->bootEloquent();
}


//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

