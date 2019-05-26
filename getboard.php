<!-- 게시물 보기 -->
<?php
require("db.php");
$id = $_GET['id'];
$sql = "SELECT * FROM board_php WHERE no = ?";
$q = $con->prepare($sql);
$q->execute([$id]);

$board = $q->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $board->title ?></title>
</head>

<body>
    <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 200px;">
        <div class="content">
            <form action="updateboard_ok.php" method="POST">
                <label>번호</label>
                <input class="form-control" name="no" type="text" value=<?php echo $board->no ?> readonly>
                <label>글쓴이</label>
                <input class="form-control" name="writer" type="text" value=<?php echo $board->writer ?> readonly>
                <div class="form-group">
                    <label>제목</label>
                    <input type="text" name="title" class="form-control" value=<?php echo $board->title ?>>
                </div>
                <div class="form-group">
                    <label>내용</label>
                    <textarea class="form-control" name="content" rows="3"><?php echo $board->content ?></textarea>
                </div>
                <a href="getboardlist.php"><button type="button" class="btn btn-secondary">뒤로가기</button></a>
                <?php if($board->writer == $_SESSION['user']->name) { ?>
                <button type="submit" class="btn btn-primary" style="margin-left: 110px;">수정하기</button>
                <button type="button" class="btn btn-danger" onclick="location.href='deleteboard_ok.php?no=<?php echo $board->no ?>'" style="margin-left: 111px;">삭제하기</button>
                <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>