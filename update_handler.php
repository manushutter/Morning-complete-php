<?php
//Check if the update button has been clicked
if (isset($_POST["btn_update"])){
    //Receive the updated data from the forms
    $userId = $_POST["u_id"];
    $updatedName = $_POST["u_name"];
    $updatedEmail = $_POST["u_email"];
    $updatedPassword = $_POST["u_pass"];
    //Connect to the database to return the data
    require_once "db_connection.php";
    //Create the update query
    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$updatedEmail',`siri`='$updatedPassword' WHERE id='$userId'";
    //Finally execute tyhe update query by use of mysqli_query()
    $update = mysqli_query($connection,$updateQuery);
    //Check if the update was successful
    if (isset($update)){
        //Redirect the user to users.php to see changes
        header("location:users.php");
    }else{
        echo"Updating failed";
    }
}