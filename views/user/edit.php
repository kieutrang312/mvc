<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Sửa Người Dùng</h2>
    <a href="http://localhost/mvc-master/?method=danhsach&controller=user" class="btn btn-primary">Dach Sách</a>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Họ và Tên:</label>
            <input value="<?= $data['name']; ?>" type="text" class="form-control" id="name" placeholder="Nhập Tên" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input  value="<?= $data['email']; ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input  value="<?= $data['password']; ?>" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember" <?= ($data['remember_token'] == 1) ? 'checked' : '' ?> value="1"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Sửa</button>
    </form>
</div>

</body>
</html>
