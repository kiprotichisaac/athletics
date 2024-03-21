!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="head">
            <span>AT-TRAIN</span>
        </div>
        <div class="pic">
            <i class="fa fa-user" aria-hidden="true" id="dropdownBtn"></i>
            <div id="dropdownContent" class="dropdown-content">
                <a href="#">Option 1</a>
                <a href="#">Option 2</a>
                <a href="#">Option 3</a>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="programmes">
            <div class="top">
                <div class="event">
                    <span class="day">
                        Sat 09/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
                <div class="event">
                    <span class="day">
                        Sun 10/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="bottom">
                <div class="event">
                    <span class="day">
                        Mon 11/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
                <div class="event">
                    <span class="day">
                        Tue 12/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
                <div class="event">
                    <span class="day">
                        Wed 13/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
                <div class="event">
                    <span class="day">
                        Thu 13/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
                <div class="event">
                    <span class="day">
                        Fri 13/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
                <div class="event">
                    <span class="day">
                        Sat 13/09/99
                    </span>
                    <span class="event">
                        RESTING DAY
                    </span>
                </div>
            </div>
        </div>

        <div class="row-content">
            <span>Weekly to-do</span>
            <br>
            <div class="todo">
                <span>
                    Title:
                </span>
                <span>
                    Time: 
                </span>
            </div>
            <div class="todo">
                <span>
                    Title:
                </span>
                <span>
                    Time: 
                </span>
            </div>
            <div class="todo">
                <span>
                    Title:
                </span>
                <span>
                    Time: 
                </span>
            </div>
        </div>
        <div class="grid-content">
            <h1 class="heading">Upcoming events</h1>

            <div class="box-container">

               <div class="box">
                   <img src="Images/finish.jpg" alt="">
                   <h3>World Racing</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

               <div class="box">
                   <img src="Images/set&go.jpg" alt="">
                   <h3>New Racing to be conducted</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

               <div class="box">
                   <img src="Images/test.jpg" alt="">
                   <h3>ADOs New Tasks</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

               <div class="box">
                   <img src="Images/multi-sprint.jpg" alt="">
                   <h3>Swift Title Race</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

               <div class="box">
                   <img src="Images/jonathan-chng-hmFJkA1t5xw-unsplash.jpg" alt="">
                   <h3>Steeple Chase</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

               <div class="box">
                   <img src="Images/sprint.jpg" alt="">
                   <h3> 100m races </h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

               <div class="box">
                   <img src="Images/olympic.jpg" alt="">
                   <h3>World Racing</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, beatae?</p>
                   <a href="#">Readmore</a>
               </div>

            </div>
          
        </div>
        <div class="add">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>

    </div>
    <footer class="footer">
        <div class="container">
          <p>&copy; 2022 AT-TRAIN. All rights reserved.</p>
        </div>
    </footer>

    <div class="Addtodos">
        <div class="addheader"></div>

            <div class="addContainer">
        <form action="insert.php" method="get" style="display: flex;">
        <div>
            <input type="text" name="" class="addtodo" >
        </div>
        <div>
            <button class="addBtn">Add</button>
        </div>
        </form>
        <?php?
        include "config.php";
        $rawData - mysqli_query($con, "select * from todo_table");
        >

        <table>
            <tbody>
            <?php
            include "config.php";
            $rawData = mysqli_query($con, "select * from todo_table");
            ?>
            
            <table>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($rawData)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['list']; ?></td>
                        <td><a href="Delete.php?ID=<?php echo $row['id']; ?>">Delete</a></td>
                        <td><a href="Update.php?ID=<?php echo $row['id']; ?>">Update</a></td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
        </div>
    </div>
      
    <script>
    document.getElementById("dropdownBtn").addEventListener("click", function() {
    var dropdownContent = document.getElementById("dropdownContent");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }
});

    </script>
</body>
</html>
