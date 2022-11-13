<div class="card-header-form">
        <?php
            require_once 'database/connect.php';
            $select = "SELECT * FROM category";
        ?>
    </div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th colspan="2" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query($select);
        $id = 0;
        foreach ($query as $cat) {
        ?>

            <tr>
                <td><?= ++$id ?></td>
                <td><?= filter_var($cat['name'],FILTER_SANITIZE_STRING) ?></td>
                <td><a class="btn btn-primary" onclick="return confirm('Where Are You Edit Your Form This OK')" href="?action=edit&id= <?= filter_var($cat['id'],FILTER_SANITIZE_NUMBER_INT) ?>">Edit</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('Where Are You Delete Your Form This OK')" href="Database/delete-cat.php?id= <?= filter_var($cat['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><button class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Category </button>
                <a href="?action=add" class="btn btn-primary">ADD-Category</a>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>