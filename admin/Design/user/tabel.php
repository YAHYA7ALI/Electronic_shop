<div class="card-header-form">
        <?php
            require_once 'database/connect.php';
            $select = "SELECT * FROM user";
        ?>
    </div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Image</th>
            <th>Password</th>
            <th>Gender</th>
            <th>User</th>
            <th style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query($select);
        $id = 0;
        foreach ($query as $user) {
        ?>

            <tr>
                <td><?= ++$id ?></td>
                <td><?= filter_var($user['firstName'],FILTER_SANITIZE_STRING) ?></td>
                <td><?= filter_var($user['lastName'],FILTER_SANITIZE_STRING) ?></td>
                <td><?= filter_var($user['email'],FILTER_SANITIZE_EMAIL) ?></td>
                <td><?= filter_var($user['address'],FILTER_SANITIZE_EMAIL) ?></td>
                <td><img style="width: 50px; height: 50px; border-radius: 50%;" class="" src="img/<?=$user['img']?>" alt="No-Image"></td>
                <td><?= filter_var(md5($user['password'])) ?></td>
                <td><?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 1 ? "Male" : "Famele" ; ?></td>
                <td><?= filter_var($user['user'],FILTER_SANITIZE_NUMBER_INT) == 0 ? "user" : "" ; ?></td>
                <td><a class="btn btn-danger" onclick="return confirm('Where Are You Delete Your Form This OK')" href="Database/delete-user.php?id= <?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><button class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Users </button>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>