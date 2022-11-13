<?php
    require_once "Database/connect.php";
    $id = $_GET['id'];
    $Selectadmin = "SELECT * FROM user WHERE id = '$id' ";
    $query = $conn->query($Selectuser);
    $user = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EDIT-Users</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">EDIT Users</h1>
                            </div>
                            <form class="user" action="database/edit-user.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstName" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" value="<?=filter_var( $user['firstName'],FILTER_SANITIZE_STRING) ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastName" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" value="<?=filter_var( $user['lastName'],FILTER_SANITIZE_STRING) ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="id" type="hidden" id="id" value="<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT) ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" value="<?=filter_var( $user['email'],FILTER_SANITIZE_STRING) ?>">
                                </div>
                                <div class="form-group">
                                    <input type="Address" name="address" class="form-control form-control-user" id="exampleInputAddress"
                                        placeholder="Address Address" value="<?=filter_var( $user['address'],FILTER_SANITIZE_STRING) ?>">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="img" class="form-control form-control-user" id="exampleInputFile"
                                        placeholder="Image" value="<?=filter_var( $user['img'],FILTER_SANITIZE_STRING) ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" value="<?=filter_var( md5($user['password']))?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password-confirmation" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" value="<?=filter_var( md5($user['password-confirmation']))?>">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" id="gender" value="1" <?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 1 ? 'checked' : '' ?> />
                                    <label class=" form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" id="gender" value="0" <?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 0 ? 'checked' : '' ?> />
                                    <label class=" form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"></label>
                                    <select name="user" class="form-control" id="exampleFormControlSelect1">
                                        <option value="0"<?= filter_var($user['user'],FILTER_SANITIZE_NUMBER_INT) == 0 ? 'selected' : '' ?>>user</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-primary"  value="EDIT-USERS">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>