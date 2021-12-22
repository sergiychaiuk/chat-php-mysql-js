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
        <form action="#">
            <div class="error-txt">Це повідомлення про помилку!</div>
            <div class="name-details">
                <div class="field input">
                    <label for="">Ім`я</label>
                    <input type="text" placeholder="Ім`я">
                </div>
                <div class="field input">
                    <label for="">Прізвище</label>
                    <input type="text" placeholder="Прізвище">
                </div>
            </div>

            <div class="field input">
                <label for="">Email</label>
                <input type="text" placeholder="Введіть email">
            </div>
            <div class="field input">
                <label for="">Пароль</label>
                <input type="password" placeholder="Введіть новий пароль">
                <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label for="">Виберіть фото</label>
                <input type="file">
            </div>
            <div class="field button">
                <input type="submit" value="Пачати спілкування">
            </div>
        </form>
        <div class="link">Вже зареєстровані? <a href="#">Увійдіть зараз</a></div>
    </section>
</div>

<script src="js/pass-show-hide.js"></script>

</body>
</html>