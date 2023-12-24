<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View task</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #181824;
            margin: 0;
            padding: 0;
        }

        center {
            text-align: center;
            margin-top: 50px;
        }

        h3 {
            color: white;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 140px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #444;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            display: inline-block;
            padding: 10px;
            background-color: Black;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="dashboard(a).php" class="back-button">&lt; Back to Dashboard</a>

    <center>
        <h3>Display Data From Task database</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th>Review</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result = mysqli_query($con, "SELECT * FROM tasks");
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Task_name']; ?></td>
                    <td><?php echo $row['Review']; ?></td>
                    <td><?php echo $row['Status']; ?></td>
                    <td><a href="edit(a).php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </center>
</body>
</html>
