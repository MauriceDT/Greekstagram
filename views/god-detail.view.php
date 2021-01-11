<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid m-0 p-0">
    <img class="GodShowBG" src="/public/images/show_bg/<?= $vars['god']->god_page_image ?>" alt="">
</div>
<div class="centerTekstje text-white">

    <h1>This is the God Page of the God called : <?= $vars['god']->god_name ?></h1>
    <br>
    <h2>The ID of this God is : <?= $vars['god']->id ?></h2>
    <br>
    <br>
    <div>
        <a href="/allgods" class="btn btn-mau">Click here to return</a>
    </div>
</div>