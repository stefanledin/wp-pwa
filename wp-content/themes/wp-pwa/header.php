<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="/manifest.json">
        <title>WP-PWA</title>
        <meta name="theme-color" content="#de751f">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
    <body <?php body_class('bg-orange-lightest');?>>

        <header class="container mx-auto mb-8 shadow-lg">
            <img src="<?php echo asset('img/header.jpg');?>" alt="Atlantis the Palm" class="mx-auto block">
            <div class="bg-orange-dark mx-auto py-2 px-4">
                <h1 class="text-white font-sans font-semibold">My Dubai Travel Diary 🇦🇪</h1>
            </div>
        </header>

        <div id="app" class="container mx-auto px-4">