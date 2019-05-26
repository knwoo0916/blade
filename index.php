<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 200px;">
        <div class="content">
            <h1>로그인</h1>
            <form action="login_ok.php" method="post">
                <div class="form-group">
                    <label for="id">아이디</label>
                    <input type="text" class="form-control" name="id" placeholder="아이디를 입력하세요" style="width: 400px;">
                </div>
                <div class="form-group">
                    <label for="pwd">비밀번호</label>
                    <input type="password" class="form-control" name="pwd" placeholder="비밀번호" style="width: 400px;">
                </div>
                <button type="submit" class="btn btn-primary">로그인</button>
                <button type="button" class="btn btn-danger" onclick="location.href='register.php'" style="margin-left: 232px;">회원가입</button>
            </form>
        </div>
    </div>
</body>

</html>