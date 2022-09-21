<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/all.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/stylePartial.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/buy.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/registration.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/person.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/report.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/business.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/modal.css">
    <title>Gestor Maximum</title>
</head>

<body>

    <?= $render("modal", $inputModal); ?>

    <header>
        <div class="header">

            <div class="logo">
                <div><img src="<?= $base; ?>/assets/img/system.png"></div>
                <div>Gestor <br> Maximum</div>
            </div>
            <div class="menu">
                <div class="title"><?= $title; ?></div>
                <nav>
                    <div class="nav-bar">
                        <div id="notification">
                            <div id="warning"></div><i class="fa-regular fa-bell"></i>
                        </div>
                        <div id="notification-car">
                            <div id="number-car"></div><i class="fa-solid fa-cart-arrow-down"></i>
                        </div>
                        <div class="user"><i class="fa-regular fa-circle-user"></i></div>
                    </div>
                    <div class="bar-notification">
                        <div class="arrow-notification"><i class="fa-solid fa-caret-down"></i></div>
                        <div class="info-notification">
                            <div><i class="fa-solid fa-circle"></i></div>
                            <div> Venda Realizada 25/06/2022</div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>