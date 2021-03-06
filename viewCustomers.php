<?php
include 'partials/dbConnect.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>All Customers</title>
</head>

<body>
    <div class="container-fluid bg-overlay2">
        <?php include 'partials/nav.php'; ?>
        <div class="container text-center mt-5 ">
            <h1 class=" mt-5">All Customers</h1>
            <table id="myTable" class="table">
                <thead class="bg-dark text-light">
                    <th>S No.</th>
                    <th>User Name</th>
                    <th>User Id</th>
                    <th>Account Balance</th>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM `users`';
                    $result = mysqli_query($conn, $query);
                    $num_rows = mysqli_num_rows($result);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo '
            <tr><td>' . $rows['S_No.'] . '</td>
            <td>' . $rows['User_Name'] . '</td>
            <td>' . $rows['User_Id'] . '</td>
            <td>Rs. ' . $rows['Amount'] . '</td>
            </tr>
            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>