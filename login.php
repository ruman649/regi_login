<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/89726b4d6a.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php

    include 'connection.php';

    if (isset($_POST['submit'])) {

        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $pass = mysqli_real_escape_string($connect, $_POST['pass']);

        $select_mail = " select * from users where email='$email' ";
        $selected_mail = mysqli_query($connect, $select_mail);
        $mail_count = mysqli_num_rows($selected_mail);

        if ($mail_count) {
            $array_data = mysqli_fetch_array($selected_mail);

            $_SESSION['name'] = $array_data['name']; //i want to use it to other page
            // $_SESSION['b'] = $array_data['pass']; //i want to use it to other page

            $db_pass = $array_data['pass'];
            $dec_pass = password_verify($pass, $db_pass);

            if ($dec_pass) {
                // echo 'successful';

                if (!empty($_POST['remember_me'])) {
                    $check =  $_POST['remember_me'];
                    // set cookie
                    setcookie('userEmail', $email, time() + (60 * 60 * 24));
                    setcookie('pass', $pass, time() + (60 * 60 * 24));
                    setcookie('check_me', $check, time() + (60 * 60 * 24));
                } else {
                    setcookie('userEmail', $email, time() - (60 * 60 * 24));
                    setcookie('pass', $pass, time() - (60 * 60 * 24));
                    setcookie('check_me', $check, time() - (60 * 60 * 24));
                }
                
                header('location:home.php');

                //  <script>
                //     location.replace('home.php');
                // </script> 


            } else {
                echo 'pass isn\'t match';
            }
        } else {
            echo "You have to register first!";
        }
    }


    ?>




    <div class="container mt-3">

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Login an Account</h4>
                <p>
                    <a href="" class="btn btn-block bg-danger text-white"><i class="fab fa-google"></i> Login via Google</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Login via facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input required name="email" class="form-control" placeholder="Email address" type="email" value="<?php 
                        
                        if (isset($_COOKIE['userEmail'])){echo $_COOKIE['userEmail']; }
                        
                        ?>">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input required name="pass" class="form-control" placeholder="Create password" type="password" value="<?php 

                        if (isset($_COOKIE['pass'])) { echo $_COOKIE['pass']; } 
                        
                        ?>">
                    </div>
                    <div class="form-group input-group">
                        <input type="checkbox" name="remember_me" <?php 

                        if (isset($_COOKIE['check_me'])) { echo "checked";} 
                        
                        ?> id="check">
                        <label style="margin-left:15px;margin-top:9px" for="check">Remember Me</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> LogIn </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">New user? <a href="index.php">Create an account</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>