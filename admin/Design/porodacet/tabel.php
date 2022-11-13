<div class="card-header-form">
        <?php
            require_once 'database/connect.php';
            $select = "SELECT * FROM products";
        ?>
    </div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Sale</th>
            <th>Description</th>
            <th>Img</th>
            <th>Category</th>
            <th colspan="2" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query($select);
        $id = 0;
        foreach ($query as $poro) {
        ?>

            <tr>
                <td><?= ++$id ?></td>
                <td><?= filter_var($poro['name'],FILTER_SANITIZE_STRING) ?></td>
                <td><?= filter_var($poro['price'],FILTER_SANITIZE_NUMBER_INT) ?></td>
                <td><?= filter_var($poro['sale'],FILTER_SANITIZE_NUMBER_INT) ?></td>
                <td><?= filter_var($poro['description'],FILTER_SANITIZE_STRING) ?></td>
                <td><img style="width: 50px; height: 50px;" class="" src="img/<?= $poro['img'] ?>" alt="No-Image"></td>
                <td>
                    <?php
                        $cat_id = filter_var($poro['cat_id'],FILTER_SANITIZE_NUMBER_INT);
                        $select_cat = "SELECT name FROM category WHERE id = $cat_id ";
                        $category = $conn->query($select_cat)->fetch_assoc();
                        echo $category['name'];
                    ?>
                </td>
                <td><a class="btn btn-primary" onclick="return confirm('Where Are You Edit Your Form This OK')" href="?action=edit&id= <?= filter_var($poro['id'],FILTER_SANITIZE_NUMBER_INT) ?>">Edit</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('Where Are You Delete Your Form This OK')" href="Database/delete-poro.php?id= <?= filter_var($poro['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><button class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Porodacet </button>
                <a href="?action=add" class="btn btn-primary">ADD-Porodacet</a>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>