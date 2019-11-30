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
    <h1>Register Page</h1><hr>
    <div class="col-md-6">
            <form action="index.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter User Id.." name="user_id"><br>
                    <input type="text" class="form-control"  placeholder="Enter First Name.." name="fname_id"><br>
                    <input type="text" class="form-control"  placeholder="Enter Last Name.." name="lname_id"><br>
                    <input type="text" class="form-control"  placeholder="Enter E-mail.." name="email_id"><br>
                    <input type="password" class="form-control"  placeholder="Enter Password.." name="password"><br>
                    <label for="select_1">User Type:</label>
                    <select class="form-control" id="select_1" name="status_id">
                        <option value="Student">Student</option>
                        <option value="Faculty">Faculty</option>
                    </select>
                    <hr>
        
                    <input type="register" value="Register" class="btn btn-danger custom" name="register">
                    <?php
                        
                        if(isset($_POST['register'])){
                            $user_id = $_POST['user_id'];
                            $fname=$_POST['fname_id'];
                            $lname=$_POST['lname_id'];
                            $email=$_POST['email_id'];
                            $status = $_POST["status_id"];
                            $password = $_POST['password'];

                            $sql = "insert into usersvalues('$user_id','$fname','$lname','$email','$password','$status',0)";
                            $results = mysqli_query($connection, $sql);
                            echo var_dump($results);
                            //$row = mysqli_fetch_array($results);
                            
                            // if($row !== NULL) {
                            //     $_SESSION['user_id'] = $row['user_id'];
                            //     header("Location: user.php");
                            // } else {
                            //     echo "<script>alert('Wrong Credentials');</script>";
                            // }
                        }

                    ?>
                </div>
            </form>

        </div>
    </div>
    
</body>
</html>

