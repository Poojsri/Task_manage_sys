<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User dashboard</title>
  <style>
    body {margin: 0; background: #181824; font-family: Arial; }
  nav {
    position: fixed;
    width: 100%;
  max-width: 300px;
  bottom: 0; top: 0;
  display: block;
  min-height: 300px;
  height: 100%;
  color: #fff;
  opacity: 0.8;
  transition: all 300ms;
  -moz-transition: all 300ms;
  -webkit-transition: all 300ms;
}
nav .vertical-menu hr{
  opacity: 0.1; 
  border-width: 0.3px;
}
nav ul{
  width: 90%; 
  padding-inline-start: 0; 
  padding-top: 30px;
  margin: 10px; 
  height: calc(100% - 20px); 
}
nav .vertical-menu-logo{
  padding: 20px; 
  font-size: 
  1.3em; 
  position: relative
}
nav li{list-style: none; padding: 10px 10px; cursor: pointer;}
nav li:hover{ color: rgba(75, 105, 176,1); }
nav li#user-info{position: absolute; bottom: 0; width: 80%;}
nav li#user-info > span{display: block; float: right; font-size: 0.9em; position: relative; opacity: 0.6;}
nav li#user-info > span:after{
  content: '';
  width: 12px;
  height: 12px;
  display: block;
  position: absolute;
  background: green;
  left: -20px; top: 0; bottom: 0;
  margin: auto;
  border-radius: 50%;
}
    header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
    }


    nav a {
      text-decoration: none;
      color: olive;
      padding: 10px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #ddd;
    }

    .logout-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      padding: 10px 20px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    .container {
      margin-left: 160px; /* Adjust the margin to accommodate the width of the navbar */
      padding: 20px;
      display: flex;
      justify-content: space-between;
    }

    .dashboard-block {
      margin-left: 12px;
      background-color: #F5F7F8;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 8px;
      width: 30%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <header>
    <h1>Task Management Dashboard</h1>
  </header>

  <nav class="vertical-menu-wrapper">
  <div class="vertical-menu-logo">
    <div>TaskMan</div>
  </div>
  <ul class="vertical-menu">
    <li> <a href="view_task(u).php">View Task</a></li>
    <li id="user-info">User<span>online</span></li>
  </ul>
</nav>

  <a href="logout.php" class="logout-btn">Logout</a>

  <div class="container">
    <div class="dashboard-block">
      <h2>Total Tasks</h2>
      <?php
      $totalTasks = mysqli_query($con, "SELECT COUNT(*) AS total FROM tasks")->fetch_assoc()['total'];
      echo "<p>{$totalTasks}</p>";
      ?>
    </div>

    <div class="dashboard-block">
      <h2>Completed Tasks</h2>
      <?php
      $completedTasks = mysqli_query($con, "SELECT COUNT(*) AS completed FROM tasks WHERE Status = 'Complete'")->fetch_assoc()['completed'];
      echo "<p>{$completedTasks}</p>";
      ?>
    </div>

    <div class="dashboard-block">
      <h2>Incomplete Tasks</h2>
      <?php
      $incompleteTasks = mysqli_query($con, "SELECT COUNT(*) AS incomplete FROM tasks WHERE Status = 'Incomplete'")->fetch_assoc()['incomplete'];
      echo "<p>{$incompleteTasks}</p>";
      ?>
    </div>
  </div>

</body>
</html>

