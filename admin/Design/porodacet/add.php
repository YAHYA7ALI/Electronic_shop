<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADD-Porodacet</title>

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
                                <h1 class="h4 text-gray-900 mb-4">ADD Porodacet</h1>
                            </div>
                            <form class="admin" action="database/add-poro.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input class="form-control" class="form-control form-control-admin" placeholder="Name" name="name" type="name" id="name" value="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="id" name="id" type="hidden" id="id" value="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" class="form-control form-control-admin" placeholder="Price" name="price" type="text" id="price" value="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" class="form-control form-control-admin" placeholder="sale" name="sale" id="sale" type="text" value="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" class="form-control form-control-admin" placeholder="Description" name="description" id="description" type="text" value="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" class="form-control form-control-admin" placeholder="Image" name="img" id="img" type="file" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category</label>
                                    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
                                        <?php
                                        require_once("database/connect.php");
                                        $select_cat = "SELECT * FROM category";
                                        $query = $conn->query($select_cat);
                                        foreach ($query as $category) {
                                        ?>
                                            <option value="<?=filter_var( $category['id'],FILTER_SANITIZE_NUMBER_INT) ?>"><?= filter_var($category['name'],FILTER_SANITIZE_STRING) ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                
                                <input type="submit" class="btn btn-primary"  value="ADD-Porodacet">
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