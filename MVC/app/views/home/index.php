<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <style>
        h2{
            text-align: center;
        }
        th,td{
            border: 1px solid black;
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <h2>Quản lý sinh viên</h2>
        <a href="<?= DOMAIN.'public/?controller=add'?>">Add new</a><br /><br/>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($students as $student){
                ?>
                <tr>
                    <td><?=$student->getId();?></td>
                    <td><?=$student->getName();?></td>
                    <td><?=$student->getGender();?></td>
                    <td>
                        <a href="<?php echo DOMAIN."public/?controller=edit&id=".$student->getId() ?>">Edit</a>
                        <a href="<?php echo DOMAIN. "public/?controller=delete&id=".$student->getId() ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>