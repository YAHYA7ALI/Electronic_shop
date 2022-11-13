<div class="container-fluid">
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                            <th>Password</th>
                                            <th>Gender</th>
                                            <th>Users</th>
                                            <th colspan="2" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require_once 'database/connect.php';
                                            $select = "SELECT * FROM user";
                                            $query = $conn->query($select);
                                            $id = 0;
                                        foreach ($query as $user) {
                                        ?>
                                        <tr>
                                            <td><?= ++$id ?></td>
                                            <td><?= filter_var($user['firstName'],FILTER_SANITIZE_STRING) ?></td>
                                            <td><?= filter_var($user['lastName'],FILTER_SANITIZE_STRING) ?></td>
                                            <td><?= filter_var($user['email'],FILTER_SANITIZE_EMAIL) ?></td>
                                            <td><?= filter_var(md5($user['password'])) ?></td>
                                            <td><img style="width: 50px; height: 50px; border-radius: 50%;" class="" src="img/<?=$user['img']?>" alt="No-Image"></td>
                                            <td><?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 1 ? "Male" : "Famele" ; ?></td>
                                            <td><?= filter_var($user['user'],FILTER_SANITIZE_NUMBER_INT) == 0 ? "user" : "" ; ?></td>
                                            <td><a class="btn btn-primary" href="?action=edit&id= <?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>">Edit</a></td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT) ?>">
                                                    Delete
                                                </button>
                                                <div class="modal fade" id="<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Confirm-Deletion</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Do You Really Wont To Delete ? <?= filter_var( $user['firstName'],FILTER_SANITIZE_STRING) ?></div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                <a class="btn btn-danger" href="database/delete-user.php?id=<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"><a href="#" class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Users </a></td>
                                            <td colspan="2"><a href="?action=add" class="btn btn-primary">ADD-Users</a> </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>