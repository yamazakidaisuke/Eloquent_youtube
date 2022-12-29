<?php
require_once "db.php";
db_conn();

//Userクラス
class User extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
}

//データ取得例
$users = User::all(); //全て表示



