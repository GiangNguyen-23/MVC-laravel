<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new student</title>
    <style>
        #form{
            border: 1px solid gray;
            background-color: skyblue;
            width: fit-content;
            padding: 20px;
            margin: 0 auto;
            border-radius: 20px;
        }
        input[type="submit" ],input[type="button"]{
            color: white;
            padding: 10px;
            border-radius: 10px;
            border: 0px;
        }
        input[name="add"]{
            background-color: green;
        }
        input[name="back"]{
            background-color: red;
        }

    </style>
</head>
<body>
    <div id ="form">
    <form method="post"  action="<?php echo DOMAIN."public/?controller=insert" ?>">
        <h2>Thêm mới sinh viên</h2>
        Họ và tên
        <br/><input type="text" name="name" value=""><br/><br/>
        Giới tính
        <br/><input type="text" name="gender" value=""><br/><br/>
        <br/><input type="submit" name="add" value="Thêm mới"> <a href="./index.php"><input type="button" name="back" value="Trở lại"> </a>
    </form>
    </div>
</body>
</html>