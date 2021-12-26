<?php
    session_start();
    if (isset($_SESSION['unique_id'])) { // if user is logged in
        header("location: users.php");
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
    <section class="form signup">
        <header>Family Chat</header>
        <form action="#" enctype="multipart/form-data">
            <div class="error-txt"></div>
            <div class="name-details">
                <div class="field input">
                    <label for="">Ім`я</label>
                    <input type="text" name="fname" placeholder="Ім`я" required>
                </div>
                <div class="field input">
                    <label for="">Прізвище</label>
                    <input type="text" name="lname" placeholder="Прізвище" required>
                </div>
            </div>

            <div class="field input">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Введіть email" required>
            </div>
            <div class="field input">
                <label for="">Пароль</label>
                <input type="password" name="password" placeholder="Введіть новий пароль" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label for="">Виберіть фото</label>
                <input type="file" name="image" required>
            </div>
            <div class="field button">
                <input type="submit" value="Пачати спілкування">
            </div>
        </form>
        <div class="link">Вже зареєстровані? <a href="login.php">Увійдіть зараз</a></div>
    </section>
</div>

<script src="js/pass-show-hide.js"></script>
<script src="js/signup.js"></script>

</body>
</html>