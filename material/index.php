<?php
include "Db.php";
$result = mysqli_query($link, "SELECT * FROM `4`");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link rel="stylesheet" href="css/styles.css">
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

                    <a href="#"><img src="img/Group 1.png" alt="Логотип"></a>
                </div>
                <nav class="navigation">
                    <ul>
                        <li><img src="img/phone_icon_136322 1.png" alt="Телефон"><b>+7 988 889 88 88</b></li>
                        <li> <a href="#why">° ПОЧЕМУ МЫ</a></li>
                        <li> <a href="#catalog">° КАТАЛОГ</a></li>
                        <li> <a href="#rew">° ОТЗЫВЫ</a></li>
                        <li> <a href="#contacs">° КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                <div class="registration">
                    <span><a href="login.html">Вход</a>/<a href="Registration.html">Регистрация</a></span>
                </div>
            </div>
        </div>
    </header>
    <div class="Banner">
        <div class="container">
            <div class="Banner_content">
                <h2>МАГАЗИН СТРОИТЕЛЬНЫХ МАТЕРИАЛОВ С ДОСТАВКОЙ</h2>
                <P>Добро пожаловать на наш сайт. Мы занимаемся продажей и доставкой строительных материалов уже на протяжении 10 лет.</P>
                <button class="Banner_button">
                    Заказать
                </button>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="container">
            <div class="product_name">
                <h2>ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
                <p>В нашем магазине вы сможете найти необходимые мастериалы для строительства</p>
            </div>
            <div class="product_content"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product_item">
                        <img src="img/mytyj-768x576 1.png" alt="Песок">
                        <div class="item_text">
                            <h6>Песок строительный</h6>
                            <p>490р</p>
                            <button class="pruduct_button">
                                <a href="tovar.html">Купить</a>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_item">
                        <img src="img/TN_jVbDe8kw 1.png" alt="Глина">
                        <div class="item_text">
                            <h6>Глина</h6>
                            <p>490р</p>
                            <button class="pruduct_button">
                                <a href="tovar.html">Купить</a>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_item">
                        <img src="img/mytyj-768x576 1.png" alt="Логотип">
                        <div class="item_text">
                            <h6>Песок строительный</h6>
                            <p>490р</p>
                            <button class="pruduct_button">
                                <a href="tovar.html">Купить</a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text">
        <div class="container">
            <div class="text_name">
                <h2>Магазин строительных материалов</h2>
                <p>
                    Изделия на основе гипсовых вяжущих имеют сравнительно небольшую плотность, достаточную прочность, несгораемы, обладают высокими звуко- и тепло изоляционными свойствами,
                    хорошо поддаются обработке (распиливанию, сверлению). Для повышения влаго- и водостойкости гипсовых изделий при их изготовлении используют гипсо-цементно-пуццолоновые и
                    гипсошлакоцементнопуццолановые вяжущие, покрывают их водостойкими водонепроницаемыми защитными красками или пастами.
                </p>
                <p>
                    Изделия на основе гипсовых вяжущих изготавливают из гипсового теста, гипсового раствора или гипсобетона с минеральными заполнителями (песок, керамзитовый гравий…) и органическими
                    наполнителями (древесные опилки, стружка, камыш…). Гипсовые и гипсобетонные изделия обладают значительной хрупкостью, поэтому в них при их изготовлении вводят армирующие материалы
                    в виде деревянных реек, камыша, металлической арматуры (сетка, проволока…).
                </p>
            </div>
        </div>

    </div>
    <div class="dignities">
        <div class="container">
            <div class="dignities_name">
                <h2 id="why">Почему выбирают именно нас</h2>
                <P>Причины, по которым к нам обращаются многочисленные клиенты</P>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="dignities_item">
                        <img src="img/1486564172-finance-loan-money_81492 1.png" alt="дешево" />
                        <h6>ДОСТУПНАЯ ЦЕНА</h6>
                        <p>В нашем магазине любой желающий может купить строительные материалы по самым доступным ценам</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="dignities_item">
                        <img src="img/613deliverytruck_100957 1.png" alt="дешево" />
                        <h6>БЫСТРАЯ ДОСТАВКА</h6>
                        <p>Наша компания сотрудничает с сервисами доставки, поэтому заказы приходят к клиентам быстро</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="dignities_item imgs">
                        <img src="img/folding_trolley_forklift_transport_warehouse_delivery_icon_148903 1.png" alt="дешево" />
                        <h6>ПОСТОЯНСТВО</h6>
                        <p>В нашем магазине всегда есть товар,который вам будет нужен. Склады не бывают пусты</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="catolog">
        <div class="container">
            <div id="catalog" class="catolog_name">
                <h2>ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
                <p>В нашем магазине вы сможете найти необходимые мастериалы для строительства</p>
            </div>
            <div class="row">
            <?php
                            while($ma = mysqli_fetch_assoc($result))
                            {?>
                                 <div class="col-md-6">
                                <div class="catolog_item">
                                    <div class="catolog_text"><img src="img/aztwxpvq7s4bx0okhddr7fkxtvn5h2ae 1 (1).png" alt="Черепица" /></div>
                                    <div class="catolog_text">
                                        <h6><?php echo $ma["name"]?></h6>
                                        <p><?php echo $ma["description"]?></p>
                                        <p><b><?php echo $ma["price"]?> р</b></p>
                                        <button class="catalog_button">
                                            <a href="tovar.html">Купить</a>
                                        </button>
                                    </div>
                                </div></div><?php
                            }
                        ?>
                
               
            </div>
        </div>
        <div class="rew_name">
        <button type="submint" class="pruduct_button">
                                <a href="form.php">Добавить</a>
                            </button>
        </div>
        
    </div>
    <div class="rew">
        <div class="container">
            <div class="rew_name">
                <h2 id="rew">Отзывы наших клиентов</h2>
                <P>Причины, по которым к нам обращаются многочисленные клиенты</P>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="rew_item">
                        <img src="img/person-girl.png" alt="Девушка" />
                        <h6>Доминика Торето</h6>
                        <p>Этот песок мне поднимает мотивацию! Мотивацию надо поднять!!!!</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="rew_item">
                        <img src="img/ffff.png" alt="Стэтхэм" />
                        <h6>Джейсон Стетхем</h6>
                        <p>Когда ты стар, песок не преграда, но когда ты молот гвозди не помеха.</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="rew_item">
                        <img src="img/mab.png" alt="Чел в шапке" />
                        <h6>Чел Вшапке</h6>
                        <p>Когда я узнал об этом сайте, я перестал копать глину сам.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="contacs">
        
            <div class="contacs_content">
                <div class="map">
                    <img src="img/4fb42d29d7ad8f4faf276576fefed27e 1.png" alt="Карта" />
                </div>
                <div class ="contacs_text">
                    <p id="contacs">
                        Контактная информация:
                       
                    </p>
                    <ul>
                        
                        <li>Чебоксары, школьный проезд 1.</li>
                        <li>E-mail: Test@yandex.ru</li>
                        <li>Телефон: 8 800 300 06 00 отдела продаж</li>
                        <li>Телефон: 8 800 340 06 00 отдела сбыта</li>
                        <li>Контактное лицо: Степанов В.И.</li>
                    </ul>
                    <p>Присоединяйтесь к нам в социальных сетях!</p>
                </div>
            </div>
        
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