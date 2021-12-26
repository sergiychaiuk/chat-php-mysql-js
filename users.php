<?php
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Family Chat</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>

<div class="wrapper">
  <section class="users">
    <header>
        <?php
            include_once "php/config.php";

            global $conn;

            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
            }
        ?>
      <div class="content">
        <img src="php/images/<?=$row['img']?>" alt="">
        <div class="details">
          <span><?=$row['fname'] . " " . $row['lname'] ?></span>
          <p><?=$row['status']?></p>
        </div>
      </div>
      <a href="#" class="logout">Вихід</a>
    </header>
    <div class="search">
      <span class="text">Виберіть користувача для початку чату</span>
      <input type="text" placeholder="Введіть ім'я для пошуку">
      <button type="button"><i class="fas fa-search"></i></button>
    </div>
    <div class="users-list">

    </div>
  </section>
</div>

<script src="js/users.js"></script>

</body>
</html>