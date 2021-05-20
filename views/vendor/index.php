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
    <h2>Danh Sách Người Bán</h2>
    <a href="http://localhost/mvc-master/?method=them&controller=vendors" class="btn btn-primary">Thêm</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>SDT</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item) { ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['slug'] ?></td>
                <td><?php echo $item['phone'] ?></td>
                <td>
                    <a href="http://localhost/mvc-master/?method=sua&controller=vendors&id=<?php echo $item['id'] ?>" class="btn btn-info">Sửa</a>
                    <a href="http://localhost/mvc-master/?method=xoa&controller=vendors&id=<?php echo $item['id'] ?>" class="btn btn-danger">Xóa</a>
                    <button onclick="eventDelete(<?php echo $item['id'] ?>)" class="btn btn-warning">Xóa (ajax)</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    // hàm xóa
    function eventDelete(id) {
        // tạo ra request chạy ngầm sử dụng ajax
        $.ajax({
            method: "GET",
            url: "http://localhost/mvc-master/?method=xoa&controller=vendors&id="+id,
            data: {

            },
            success: function(response) {
                alert("xóa thành công");
                // tải lại trang
                location.reload();
            }
        });

    }



</script>



</body>
</html>

