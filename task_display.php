<?php
include 'common.php';
   $query="SELECT * FROM task";
   $result= mysqli_query($con, $query);
  
   if($_SERVER['REQUEST_METHOD']=='POST'){
        $tasks=$_POST['tasks'];
        
        $deadline=$_POST['deadline'];
        
        $sql="INSERT INTO task(tasks,deadline) VALUES('$tasks','$deadline')";
        
        $results= mysqli_query($con, $sql);
   
        if(!$results){
            die("failed");
            
        }else{
            header("location:task_display.php?todo-added");
        }
        
    }
    if(isset($_GET['delete_todo'])){
        $delete_todo=$_GET['delete_todo'];
        $sql_query="DELETE FROM task WHERE id='$delete_todo'";
        $res= mysqli_query($con, $sql_query);
        if(!$res){
            die("failed");
            
        }else{
            header("location:task_display.php?todo-deleted");
        }
    }
    
    ?>
<html>
    <head>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
       <title>Task Display</title>
       <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <div class="container-fluid">
                <div class="jumbotron" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTv77rBej0xt06K4IRrGo8PE65Tc9iM-G1S3pgdbUa1MSoC0MY_&usqp=CAU); background-size: 100%;">
                    <center>
                        <h1 style="color:black; font-family: serif;">Daily Tasks</h1>
                    </center>
                </div>
        </div>
        
        
        <div class="container">
        
            <table class="table table-striped table-bordered">
                <thead style="background-color:grey">
                
                <th>Task</th>
                <th>Deadline</th>
                <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    while($row= mysqli_fetch_assoc($result)){
                       $id=$row['id'];
                       $tasks=$row['tasks'];
                       $deadline=$row['deadline'];
                    ?>
                    <tr>
                        
                        
                        <td><?php echo $tasks; ?></td>
                        <td><?php echo $deadline; ?></td>
                        <td><a href="task_display.php?delete_todo=<?php echo $id ?>"><button class="btn btn-danger btn-lg">Delete</button></a></td>
                    </tr>
                    <?php } 
                    
                    ?>
                    
                    
                </tbody>
            </table>
            <br>
            
        </div>
        
        <div style="background-color:yellowgreen;opacity:0.8;  padding:10px ;">
            <center>
                <h4>Add more <a href="index.php" > <strong>TODO</strong></a>.</h4>
            </center>
            </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        
    </body>
    
</html>
