<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>   Paris </title>
    <link href="<?=$_ENV['URL']?>/css/bootstrap.rtl.min.css" rel="stylesheet" >
    <link href="<?=$_ENV['URL']?>/css/style.css" rel="stylesheet" >
    <style>
        body {
            background: linear-gradient(-45deg, #f83cee, #932cff, #23a6d5, #47d523);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

    </style>
</head>
<body>
<div class="container">
