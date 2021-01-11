<?php require 'views/partials/header.view.php' ?>

<div class="centerTekstje">

    <h1>This is the God Page of the God called : <?= $vars['god']->god_name ?></h1>
    <br>
    <h2>The ID of this God is : <?= $vars['god']->id ?></h2>
    <br>
    <br>
    <div>
        <a href="/allgods" class="btn btn-mau">Click here to return</a>
    </div>
</div>