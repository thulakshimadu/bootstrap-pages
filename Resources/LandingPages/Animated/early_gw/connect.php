<?php
if(!empty($_GET['useremail'])&&!empty($_GET['message']))
 {
echo'<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>gavelWeb - веб-студия для старта вашего бизнеса в интернете!</title>
    <meta name="description" content="Веб-студия по созданию красивых, быстрых, оптимизированных персональных сайтов для вашего бизнеса. Создание сайтов визиток, лэндингов, веб магазинов и блогов для Украины, России, Беларуси"/>
    <meta name="keywords" content="Веб-студия, веб студия, создание сайтов, создание лендингов, создание лендингов, создание посадочных страниц, создание блогов, создание интернет магазинов, создание визиток, заказать сайт, SEO-оптимизация, SEO-раскрутка, веб разработка, веб дизайн "/>
    <meta name="author" content="gavelWeb"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="css/normalize.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/media.css"/>
    <link rel="stylesheet" href="css/etline-font.css"/>
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css"/>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css"/>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">Вы используете <strong>устаревший</strong> веб браузер. Пожалуйста <a href="http://browsehappy.com/?locale=ru">обновите свой браузер</a> и Вы не пожалеете.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="img/gw-logo.png" alt="gavelWeb logo"></a></div>
                    <div class="header-nav">
                        <nav class="">
                            <ul class="primary-nav">
                                <li><a href="#services">Услуги</a></li>
                                <li><a href="#blog">Блог</a></li>
                                <li><a href="#about">О&nbsp;компании</a></li>
                                <li><a href="#portfolio">Портфолио</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>Будь лидером среди других, выбирай веб-студию gavelWeb!</h1>
                        <p class="intro">Выбирая правильную веб-студию, Вы гарантируете себе успех и лидерство на рынке!</p>
                        <a href="#" class="btn btn-fill btn-large btn-margin-right">Наши тарифы</a> <a href="#services" class="btn btn-accent btn-large">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>';
 // EDIT THE 2 LINES BELOW AS REQUIRED
	//$seccode=$_GET['msgsecuritycode'];
	//$seccode=$seccode%7;
	//if($seccode==0)
	//{
	$email_to = "gavelyukworking@@gmail.com";
	$email1_to = "gavelyukworking@@gmail.com";
	$email_subject = "GavelWeb Обратная связь с нашей компанией.";
	$useremail = $_GET['useremail']; 
	$message = $_GET['message'];
	if(strlen($message) < 5 || strlen($message) > 200) {
	echo'<div class="row well text-leader-color">Ошибка длины сообщения, ошибка...
	<a href="./feedback.html">Вернуться назад</a></div>';	
	exit();
	}

	
 $email_message = "Обратная связь с нашей компанией.\n\n";
 $email_message .= "Эл.Почта: ".$useremail."\n";
 $email_message .= "------------Cообщение---------------\n";
 $email_message .= $message;
 //$email_message .= "Comments: ".clean_string($comments)."\n";
 // create email headers
 $headers = 'From: '."gavelweb.pro"."\r\n".
 'Reply-To: '.$useremail."\r\n" .
 'X-Mailer: PHP/' . phpversion();
 mail($email_to, $email_subject, $email_message, $headers);
 //mail($email1_to, $email_subject, $email_message, $headers);
echo'<div class="row well text-success">Заявка отослана успешно!
 <a href="./index.html">Вернуться назад</a></div>
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group">
                            <li><a href="#services">Услуги</a></li>
                            <li><a href="#blog">Блог</a></li>
                            <li><a href="#about">О компании</a></li>
                            <li><a href="#portfolio">Портфолио</a></li>
                            <li><a href="#contacts">Контакты</a></li>
                            <li><a href="#">Лицензия</a></li>
                        </ul>
                        <p>Copyright © 2016 <a href="#">gavelWeb</a><br>
                        <a href="#">Лицензировано</a> | Сделано с <span class="fa fa-heart pulse2"></span> нашей <a href="#">веб-студией gavelWeb</a>.</p>
                    </div>
                </div>
                <div class="social-share">
                    <p>Следите за нами в соц. сетях</p>
                    <a href="https://twitter.com/" class="twitter-share"><i class="fa fa-twitter"></i></a><a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a><a href="#" class="vk-share"><i class="fa fa-vk"></i></a>
                </div>
            </div>
        </div>
    </footer>
    </body>
	</html>';	
	}else{
		echo'<div class="row well">Неверный код безопасности, ошибка...
 <a href="./index.html">Вернуться назад</a></div>';	
		
//}
}else{
echo'<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>gavelWeb - веб-студия для старта вашего бизнеса в интернете!</title>
    <meta name="description" content="Веб-студия по созданию красивых, быстрых, оптимизированных персональных сайтов для вашего бизнеса. Создание сайтов визиток, лэндингов, веб магазинов и блогов для Украины, России, Беларуси"/>
    <meta name="keywords" content="Веб-студия, веб студия, создание сайтов, создание лендингов, создание лендингов, создание посадочных страниц, создание блогов, создание интернет магазинов, создание визиток, заказать сайт, SEO-оптимизация, SEO-раскрутка, веб разработка, веб дизайн "/>
    <meta name="author" content="gavelWeb"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="css/normalize.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/media.css"/>
    <link rel="stylesheet" href="css/etline-font.css"/>
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css"/>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css"/>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">Вы используете <strong>устаревший</strong> веб браузер. Пожалуйста <a href="http://browsehappy.com/?locale=ru">обновите свой браузер</a> и Вы не пожалеете.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="img/gw-logo.png" alt="gavelWeb logo"></a></div>
                    <div class="header-nav">
                        <nav class="">
                            <ul class="primary-nav">
                                <li><a href="#services">Услуги</a></li>
                                <li><a href="#blog">Блог</a></li>
                                <li><a href="#about">О&nbsp;компании</a></li>
                                <li><a href="#portfolio">Портфолио</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>Будь лидером среди других, выбирай веб-студию gavelWeb!</h1>
                        <p class="danger">Вы чтото неправильно заполнили!</p>
                        <a href="./index.html" class="btn btn-fill btn-large btn-margin-right">Вернитесь назад</a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group">
                            <li><a href="#services">Услуги</a></li>
                            <li><a href="#blog">Блог</a></li>
                            <li><a href="#about">О компании</a></li>
                            <li><a href="#portfolio">Портфолио</a></li>
                            <li><a href="#contacts">Контакты</a></li>
                            <li><a href="#">Лицензия</a></li>
                        </ul>
                        <p>Copyright © 2016 <a href="#">gavelWeb</a><br>
                        <a href="#">Лицензировано</a> | Сделано с <span class="fa fa-heart pulse2"></span> нашей <a href="#">веб-студией gavelWeb</a>.</p>
                    </div>
                </div>
                <div class="social-share">
                    <p>Следите за нами в соц. сетях</p>
                    <a href="https://twitter.com/" class="twitter-share"><i class="fa fa-twitter"></i></a><a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a><a href="#" class="vk-share"><i class="fa fa-vk"></i></a>
                </div>
            </div>
        </div>
    </footer>
    </body>
	</html>';
}
 ?>
