<?php require_once "con.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    <div class="container">
    <h1>Login Page</h1><hr>
        <div class="col-md-6">
            <form action="index.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter User Id.." name="user_id"><br>
                    <input type="password" class="form-control"  placeholder="Enter Password.." name="password"><br>
                    <input type="submit" value="Login" class="btn btn-success custom" name="submit">
                </div>
            </form>

            <?php

                if(isset($_POST['submit'])) {
                    $user_id = $_POST['user_id'];
                    $password = $_POST['password'];

                    $sql = "select * from users where user_id = '$user_id' and password = '$password' limit 1";
                    $results = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_array($results);
                    
                    if($row !== NULL) {
                        $_SESSION['user_id'] = $row['user_id'];
                        header("Location: user.php");
                    } else {
                        echo "<script>alert('Wrong Credentials');</script>";
                    }
                
                }
            ?>
        </div>
      
    </div>
    
</body>
</html>

