<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<a class="btn btn-secondary btn-block" href="register.php">Add user</a>
    <h1 class="text-info text-center">All Users</h1>
    <table class="table table-hover table-dark">
        <tr>
            <th class="text-success">NAME</th>
            <th class="text-success">EMAIL</th>
            <th class="text-success">DELETE</th>
            <th class="text-success">UPDATE</th>
        </tr>
        <?php
        //connect to the database to fetch all the users
        require_once "db_connection.php";
        //prepare the select query to fetch the users
        $selectQuery = "SELECT * FROM `users` WHERE 1";
        //finally grab the users using mysqli_query()
        $users = mysqli_query($connection,$selectQuery);
        //use a loop to display all the users
        foreach ($users as $user){
            $name = $user["jina"];
            $email = $user["arafa"];
            $password = $user["siri"];
            $id = $user["id"];
            echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td><a class='btn btn-danger' href='delete.php?u_id=$id'>Delete</a></td>
                    <td><a class='btn btn-primary' href='update.php?u_id=$id&u_email=$email&u_pass=$password&u_name=$name'>Update</a></td>
                  </tr>";
        }
        ?>
    </table>

</body>
</html>
