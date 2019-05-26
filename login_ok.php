<?php

$id = $_POST['id'];
$pwd = $_POST['pwd'];

require("db.php");

$sql = "SELECT * FROM board_user WHERE id = ? AND pwd = PASSWORD(?)";
$user = fetch($con, $sql, [$id, $pwd]);

if ($user) {
    $_SESSION['user'] = $user;
    $_SESSION['name'] = $user->name;
    msgAndGo("로그인 성공", "/getboardlist.php");
} else {
    msgAndGo("로그인 실패", "/index.php");
}