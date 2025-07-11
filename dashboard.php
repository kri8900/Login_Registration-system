<?php
include('db.php');
session_start();
if(isset($_SESSION['name'])){
}else{
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
  <style>
    .head a button{
        width: 60px;
        height: 25px;
        background:red;
        border-radius:5px;
        border:none;
        color:white;
        cursor:pointer;
        font-size:14px;
        position:absolute;
        right:40px;
    }
  </style>
</head>
<body>

  <div class="head">
    Dashboard <a href="logout.php"><button>Log out</button></a>
  </div>

  <div class="container">
    <div class="logo">
      <img src="../img/logo.png" alt="logo">
    </div>
    <div class="greet">
        <h3>Welcome: <?php echo $_SESSION['name'];?></h3>
    </div>
  </div>

</body>
</html>
