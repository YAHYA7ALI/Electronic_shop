<div class="card-header-form">
        <?php
            require_once 'database/connect.php';
            $select = "SELECT * FROM messages";
        ?>
    </div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Messages</th>
            <th style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query($select);
        $id = 0;
        foreach ($query as $mess) {
        ?>

            <tr>
                <td><?= ++$id ?></td>
                <td><?= filter_var($mess['name'],FILTER_SANITIZE_STRING) ?></td>
                <td><?= filter_var($mess['phone'],FILTER_SANITIZE_NUMBER_INT) ?></td>
                <td><?= filter_var($mess['email'],FILTER_SANITIZE_EMAIL) ?></td>
                <td><?= $mess['messages'] ?></td>
                <td><a class="btn btn-danger" onclick="return confirm('Where Are You Delete Your Form This OK')" href="Database/delete-mess.php?id= <?= filter_var($mess['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><button class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Messages </button>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>