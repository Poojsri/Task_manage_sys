<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            padding-top:10px;
        }

        form {
            background-color: #B6BBC4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-left:410px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
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
        <h3>Insert Data</h3>
    <form method="POST">
    <lable>Task Name</lable>
    <input type="text" name="Task_name" required>
    <br><br>
    <lable>Review</lable>
    <textarea name="review" rows="4" cols="50" required></textarea>
    <br><br>
    <label >Status</label>
    <select name="status">
        <option value="Incomplete">Incomplete</option>
        <option value="Complete">Complete</option>
        </select>
    <br><br>
    <input type="submit" name="submit" value="Submit" />
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $task_name =$_POST['Task_name'];  
  $review =$_POST['review'];
  $status = $_POST['status'];
  $query = "INSERT INTO `tasks`(`Task_name`,`Review`,`Status`)
  VALUES ('$task_name','$review','$status')";
 $query_run = mysqli_query($con,$query);
 
  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Data Added  Successfully!")
        
    </script>';

  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Added  UnSuccessfull!")
        
    </script>';
  }
}



?>