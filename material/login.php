<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Войти</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@400;600;700;800&family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_content">
                <div class="logo">

                    <a href="index.html"><img src="img/Group 1.png" alt="Логотип"></a>
                </div>
                <nav class="navigation">
                    <ul>
                        <li><img src="img/phone_icon_136322 1.png" alt="Телефон"><b>+7 988 889 88 88</b></li>
                        <li> <a href="index.html#why">° ПОЧЕМУ МЫ</a></li>
                        <li> <a href="index.html#catalog">° КАТАЛОГ</a></li>
                        <li> <a href="index.html#rew">° ОТЗЫВЫ</a></li>
                        <li> <a href="index.html#contacs">° КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                <div class="registration">
                    <span><a href="login.html">Вход</a>/<a href="Registration.html">Регистрация</a></span>
                </div>
            </div>
        </div>
    </header>
    <div class="login">
        <form action="/" method="post">
            <h3>Вход</h3>
            <div class="inputs"><input type="text" name="phone" placeholder="Логин" /></div>
            <div class="inputs"> <input type="password" name="pass" placeholder="Пароль" /></div>
            <div><a href="#">Забыли пароль?</a></div>
            <button class="log_button">
                Войти
            </button>
            <div class="reg_A"><a href="Registration.html">Регистрация</a></div>
            


        </form>

    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="foooter_item">
                        <a href="#"><img class="im" src="img/Group 1.png" alt="Логотип"></a>
                    </div>
                </div>
                
                <div class="col-md-4 offset-md-1">
                    <div class="foooter_item">
                        <p>ООО «StroySam», 123456, г.Новочеркасск, ул. Волшебная 1, офис 1ИНН 1234567890 ОГРН 123456789012</p>
                        <a href="#">Политика конфиденциальности</a>
                    </div>
                </div>
                <div class="col-md-2 offset-md-3">
                    <div class="foooter_item">
                        <img src="img/phone_icon_136322 1.png" alt="Телефон"><b>+7 988 889 88 88</b>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>