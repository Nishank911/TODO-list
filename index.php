<?php 
    include 'common.php';
    
    
    
    
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
       <title>TODO</title>
       <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
       <div class="container-fluid">
                <div class="jumbotron" style="background-image: url(https://media.istockphoto.com/photos/notes-to-do-list-christmas-composition-background-wallpaper-pine-picture-id878894096); background-size: 100%;">
                    <center>
                        <h1 style="color:black; font-family: serif;">TODO</h1>
                        <h4 style="color:black; font-family: serif;">Add your daily tasks</h4>
                    </center>
                </div>
        </div>
        <div class="container">    
        <div class="row row-style">
            <div class="col-xs-offset-3 col-xs-6 ">
        <form method="POST" action="task_display.php" >
         
            <div class="form-group">
                <input type="text" class="form-control" id="tasks" placeholder="TODO" name="tasks" required>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="deadline" placeholder="Deadline" name="deadline" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
            <button type="reset"  class="btn btn-warning btn-lg btn pull-right" name="clear">Clear</button>
        </form>
            </div>
            </div>
        </div>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
