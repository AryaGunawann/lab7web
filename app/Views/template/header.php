<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Layout Sederhana</h1>
        </header>
        <nav class="navbar">
            <a class="active" href="home">Home</a>
            <a href="artikel">Artikel</a>
            <a href="about">About</a>
            <a href="contact">Contact</a>
        </nav>
        <section class="wrapper">