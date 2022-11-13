<?php
        session_start();
        session_regenerate_id();
        if (!isset($_SESSION['login_id'])) 
        {
            header('location: index.php');
            exit;
        }
    require_once 'inc/header.php' ;
    require_once 'inc/asid.php' ;
    require_once 'inc/nav.php' 
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables-Category</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Category</h6>
                        </div>
                        <?php
                            if (!isset($_GET['action'])) 
                                {
                                    include('Design/category/tabel.php');
                                }
                                    elseif ($_GET['action'] == 'add') 
                                {
                                    include('Design/category/add.php');
                                } 
                                    elseif ($_GET['action'] == 'edit') 
                                {
                                    include('Design/category/edit.php');
                                }
                        ?>
                    </div>
                </div>
                
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="database/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php 
        require_once 'inc/footer.php' ;
    ?>