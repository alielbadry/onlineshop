<?php
    include('config.php');

    $ID = $_GET['id'];
    $up = mysqli_query($conn, "SELECT * FROM `prod` WHERE id=$ID");
    $data = mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | تعديل المنتجات</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="up.php" method="POST" enctype="multipart/form-data">
                <h2>تعديل المنتجات</h2>
                <img src="logo.jpg" alt="logo" width="450px">
                <input type="text" name="id" value="<?php echo $data['id']; ?>">
                <br>
                <input type="text" name="name" value="<?php echo $data['name']; ?>">
                <br>
                <input type="text" name="price" value="<?php echo $data['price']; ?>">
                <br>
                <input type="file" name="image" id="file" style="display:none;">
                <br>
                <label for="file">تحديث صورة المنتج</label>
                <button name="update" type="submit">تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developed By AliAlien18</p>
    </center>
</body>
</html>