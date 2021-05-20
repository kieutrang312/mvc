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
    <h2>Sửa Người Bán</h2>
    <a href="http://localhost/mvc-master/?method=danhsach&controller=vendors" class="btn btn-primary">Dach Sách</a>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Tên người bán:</label>
            <input  value="<?= $data['name']; ?>" type="text" class="form-control" id="name" placeholder="Nhập Tên" name="name">
        </div>
        <div class="form-group">
            <label for="">Sản phẩm bán:</label>
            <input value="<?= $data['slug']; ?>" type="text" class="form-control" id="email" placeholder="Enter sp" name="slug">
        </div>
        <div class="form-group">
            <label for="phone">SDT:</label>
            <input value="<?= $data['phone']; ?>" type="number" class="form-control" id="phone" placeholder="Enter sdt" name="phone">
        </div>

        <button type="submit" class="btn btn-default">Thêm</button>
    </form>
</div>

</body>
</html>

