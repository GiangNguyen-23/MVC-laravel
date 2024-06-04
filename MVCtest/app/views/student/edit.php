<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
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
        input[name="edit"]{
            background-color: green;
        }
        input[name="back"]{
            background-color: red;
        }

    </style>
</head>
<body>
    <div id ="form">
    <form method="post" >
        <h2>Chỉnh sửa thông tin sinh viên</h2>
        Họ và tên
        <br/><input type="text" name="name" ><br/><br/>
        Giới tính
        <br/><input type="text" name="gender" ><br/><br/>
        <br/><input type="submit" name="edit" value="Cập nhật"> <a href="/MVCtest/public/"><input type="button" name="back" value="Trở lại"> </a>
    </form>
    </div>
</body>
</html>