<?php
    session_start();
    include("config.php");

      
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

     
            $query = "SELECT * FROM `tasks` WHERE `id` = $id";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0) {
                $row = mysqli_fetch_assoc($query_run);
               
                ?>
                <h1>Tasks Information</h1>
                <a type="button" class="btn btn-outline-primary" href="index.php">Go Back</a>
                <ul>
                <p>ID<?php echo $row['id']; ?></p>
                <p>Title<?php echo $row['title']; ?></p>
                <p>Description<?php echo $row['description']; ?></p>
                <p>Priority<?php echo $row['priority']; ?></p>
                <p>Due Date<?php echo $row['due_date']; ?></p>
                </ul>
                
              
                <?php
            } else {
                echo "Task not found.";
                header("Location: index.php? msg=Successfully Deleted");
            }
        } else {
            echo "Invalid ID.";
        }
        ?>
    </div>

   
