<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>게시판</title>
</head>

<body>
  <div style="margin-top: 20px; margin-left: 1600px; font-size: 24px;"><?= $_SESSION['user']->name ?> 님</div>
  <a href="logout.php"><button type="button" class="btn btn-danger" style=" margin-top: -35px; float: right; margin-right: 100px;">로그아웃</button></a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">번호</th>
        <th scope="col">제목</th>
        <th scope="col">글쓴이</th>
      </tr>
    </thead>
    <tbody>

      <?php
      require("db.php");
      $sql = "SELECT * FROM board_php";
      $q = $con->prepare($sql);
      $q->execute();

      $list = $q->fetchAll(PDO::FETCH_OBJ);

      foreach ($list as $board) {
        echo "<tr>";
        echo "<td>$board->no </td>";
        echo "<td><a href='getboard.php?id=$board->no' style='text-decoration:none; color: #000;'> $board->title </a></td>";
        echo "<td>$board->writer</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <a href="insertboard.php"><button type="button" class="btn btn-primary">글작성</button></a>
</body>

</html>