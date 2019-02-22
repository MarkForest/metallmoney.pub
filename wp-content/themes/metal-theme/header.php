<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encoding -->
    <meta charset="utf-8">
    <!-- Responsiveness, scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- IE compatibility modes -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the title of you site -->
    <title>Metallmaney - одна из главных компаний Украины, специализирующая по переработке и сбору черного и цветного металлолома</title>
    <!-- Set the descritpion of your site -->
    <meta name="description" content="">
    <!-- Set the author of your site -->
    <meta name="author" content="Awerest - interactive studio">
    <!-- Main Bootstrap styling -->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--    <!-- Custom styling -->
    <!--    <link href="css/styles.css" rel="stylesheet">-->
    <!-- Iconic font - FontAwesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google fonts -->
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>-->
    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="<?php bloginfo('template_url')?>/assets/icons/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>
<style>
    .my_btn, .my_btn:hover, .my_btn:focus, .my_btn:active, .my_btn:active:focus {
        background: #00a0dc;
        font-family: 'Montserrat', sans-serif;
        color: #fff;
        font-size: 13px;
        font-weight: 400;
        line-height: 1;
        padding: 14px 25px;
        margin: 15px 0 0 0;
        border-radius: 25px !important;
        border: 1px solid transparent;
        text-transform: uppercase;
        text-decoration: none;
        outline: none;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    .my_btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        display: block;
        width: 100%;
    }

    #phone {
        border-radius: 25px;
    }

    #email {
        border-radius: 25px;
    }
    #message {
        border-radius: 25px;
    }
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="61">
<!-- Start preloader -->
<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- End preloader -->
<!-- Start navigation -->
<div class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation" data-start="padding: 10px 0px; background: rgba(255, 255, 255, .1); border-color: rgba(255, 255, 255, .1);" data-20p="padding: 0px 0px; background: rgba(255, 255, 255, .95); border-color: rgba(231, 231, 231, 1);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Light and dark logo -->
            <a href="#intro" class="navbar-brand">
                <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/logo-light.png" alt="" data-start="opacity: 1;" data-20p="opacity: 0;">
                <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/logo.png" alt="" data-start="opacity: 0;" data-20p="opacity: 1;">
            </a>
        </div>
        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#intro">Home</a></li>
                <li><a href="#services" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Схема работы</a></li>
                <li><a href="#features" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">О нас</a></li>
                <li><a href="#works-top" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Асортимент</a></li>
                <li><a href="#contact" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End navigation -->