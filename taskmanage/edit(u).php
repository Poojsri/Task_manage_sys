<?php
include 'connection.php';

$result = mysqli_query($con,"SELECT * FROM tasks WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

if(count($_POST) > 0) {
    mysqli_query($con,"UPDATE tasks set id='" . $_POST['id'] . "',
    Task_name='" . $_POST['Task_name'] . "',Status='" . $_POST['status'] . "'
    WHERE id='" . $_POST['id'] . "'");

    $userType = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';

    echo '<script type="text/javascript"> alert("Data Updated  Successfully!")
        document.location.href="view_task(u).php";
        </script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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

        form {
            background-color: #B6BBC4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-left: 410px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #132043;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            display: inline-block;
            padding: 7px;
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
    <a href="view_task(u).php" class="back-button">&lt; Back to Tasks</a>
    <center>
        <br>
        <br>
        <h3>Edit Data</h3>
        <form method="POST">
            <label>Task Name</label>
            <input type="text" name="Task_name" value="<?php echo $row['Task_name']; ?>">
            <br><br>
            <label>Status</label>
            <select name="status" value="<?php echo $row['status']; ?>">
                <option value="Incomplete">Incomplete</option>
                <option value="Complete">Complete</option>
            </select>
            <br><br>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" name="submit" value="Update" />
            
        </form>
    </center>
</body>
</html>
