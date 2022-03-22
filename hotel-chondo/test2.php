<?php 
include "test1.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test1.php" method="POST">
    <div class="form-group">
    <label for="">nama</label>
    <input type="text" name="namaa"/>
    </div>
    <div class="form-group">
    <label for="">tanggal</label>
    <input type="date" name="tanggall"/>
    <button type="submit" name="submit">Masuk</button>
    </div>
    </form>
</body>
</html>