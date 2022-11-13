
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
                                            <th>Password</th>
                                            <th>Image</th>
                                            <th>Gender</th>
                                            <th>DIR</th>
                                            <th colspan="2" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require_once 'database/connect.php';
                                            $select = "SELECT * FROM admin";
                                            $query = $conn->query($select);
                                            $id = 0;
                                        foreach ($query as $admin)
                                        {
                                        ?>
                                        <tr>
                                            <td><?= ++$id ?></td>
                                            <td><?= filter_var($admin['firstName'],FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></td>
                                            <td><?= filter_var($admin['lastName'],FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></td>
                                            <td><?= filter_var($admin['email'],FILTER_SANITIZE_EMAIL) ?></td>
                                            <td><?= filter_var(md5($admin['password'])) ?></td>
                                            <td><img style="width: 50px; height: 50px; border-radius: 50%;" class="" src="img/<?=$admin['img']?>" alt="No-Image"></td>
                                            <td><?= filter_var($admin['gender'],FILTER_SANITIZE_NUMBER_INT) == 1 ? "Male" : "Famele" ; ?></td>
                                            <td><?= filter_var($admin['dir'],FILTER_SANITIZE_NUMBER_INT) == 1 ? "admin" : "" ; ?></td>
                                            <td><a class="btn btn-primary" onclick="return confirm('Where Are You Edit Your Form This OK')" href="?action=edit&id= <?= filter_var($admin['id'],FILTER_SANITIZE_NUMBER_INT)?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Where Are You Delete Your Form This OK')" href="database/delete-admin.php?id=<?= filter_var($admin['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"><a href="#" class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Admin </a></td>
                                            <td colspan="2"><a href="?action=add" class="btn btn-primary">ADD-Admin</a> </td>
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
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>