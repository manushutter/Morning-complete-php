<?php
//Check if the delete button has been clicked
if (isset($_GET["u_id"])){
    //Now receive data from the url
    $userId = $_GET["u_id"];
    //connect to the database to delete
    require_once "db_connection.php";
    //create a delete query
    $deleteQuery = "DELETE FROM `users` WHERE id = '$userId'";
    //finally delete using the mysqli_query()
    $delete = mysqli_query($connection,$deleteQuery);
    //check if the deletion was successful
    if (isset($delete)){
        //Redirect the user back to your users.php file
        header("location:users.php");
    }else{
        echo "deletion failed";
    }

}