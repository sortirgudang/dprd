<?php
require 'function.php';

//Cek Login,
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-2" name="email" id="inputEmailAddress" type="username" placeholder="Enter username" required/>
                                            </div>
                                           
                                            <label class="small mb-1">Password</label>
                                            <div class="input-group">
                                                <input class="form-control py-2" type="password" id="password" name="password" placeholder="Enter password" required>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button" id="see_pass"><i class="fa fa-eye"
                                                    class="toggle-password" onclick="togglePassword()"></i></button>
                                                </span>
                                            </div>

                                            <script>
                                                function togglePassword() {
                                                    var passwordInput = document.getElementById("password");
                                                    var toggleIcon = document.querySelector(".toggle-password");

                                                    if (passwordInput.type === "password") {
                                                        passwordInput.type = "text";
                                                        
                                                    } else {
                                                        passwordInput.type = "password";
                                                        
                                                    }
                                                }
                                            </script>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>