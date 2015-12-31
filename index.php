<?php
require_once 'core/init.php';
//my new comment2
$user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?",array('max'));

if($user->error()){
	echo "error";
}else{
	echo "OK";
}