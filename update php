<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <?php
    $id = $_GET['id'];
    include "config.php";
    $Rdata = mysqli_query($con, "select * from table where Id= $id");

    $data = mysqli_fetch_array($Rdata); 

    ?>

</head>
<body>
    <form action="insert.php" method="get" style="display: flex;">
        <h3>Update Info</h3>
        <div>
            <input type="text" value="<?php echo$data['list']?>"  name="list" class="addtodo" >
        </div>
        <div>
            <button class="addBtn">Add</button>
        </div>
        </form>
</body>
</html>
