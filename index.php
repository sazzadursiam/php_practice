<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <a href="add-new.php" class="btn btn-info">Add new</a>
        <div class="row py-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users order by created_at DESC";
                    $query = mysqli_query($con, $sql);
                    $sl = 1;
                    while ($rows = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $sl++; ?></th>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php if ($rows['status'] == 1) {
                                    echo '<span class="badge bg-success">Active</span>';
                                } else {
                                    echo '<span class="badge bg-danger">In-Active</span>';
                                } ?></td>
                            <td>
                                <a href="" class="btn btn-info">view</a>
                                <a href="" class="btn btn-warning">edit</a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Are you Sure?');">delete</a>
                                <?php echo $rows['id']; ?>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>