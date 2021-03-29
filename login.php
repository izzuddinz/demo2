<?php 
  include("../db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/main.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../dist/css/cm-modal.css">
    <style>
    .toast-top-center {
        top: 30px;
    }
    </style>
</head>

<body style="background-color: #f5f5f5">
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-lg-5">
                <div class="card pt-3 pb-3 pl-2 pr-2">
                    <div class="card-body">
                        <p class="h3 font-weight-bold text-dark p-0 mb-1">Admin Login</p>
                        <p class="text-dark">Please login to continue</p>

                        <form action="login_process.php" method="post" id="login_form">
                            <div class="form-group mb-4">
                                <label class="font-weight-normal">Email</label>
                                <input autocomplete="off" type="email" class="form-control form-control-lg " id="username" name="username" placeholder="Enter your username" required />
                            </div>
                            <div class="form-group mb-4">
                                <label class="font-weight-normal">Password</label>
                                <input autocomplete="off" type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password" required />
                            </div>
                            <input type="submit" name="submit" class="btn btn-block btn-primary font-weight-bold p-2"
                                value="Log in" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
</body>

</html>