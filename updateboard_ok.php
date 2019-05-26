<?php
require("db.php");

$no = $_POST['no'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE board_php SET title = ?, content = ? WHERE no = ?";

$cnt = query($con, $sql, [$title, $content, $no]);

if ($cnt == 1) {
    msgAndGo("수정 성공", "/getboardlist.php");
} else {
    sendJsonResponse('수정 실패', false,[$title, $content, $no]);
}

