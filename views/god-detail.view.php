<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid m-0 p-0">

    <img class="GodShowBG" src="/public/images/show_bg/<?= $vars['god']->god_page_image ?>" alt="">
    <!-- Here is the actual card content of the page -->
    <!-- Here is the actual card content of the page -->
    <div class="position-absolute card_01">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-2"><?= $vars['god']->god_name ?></h5>
            </div>
        </div>
    </div>

    <div class="position-absolute card_02">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $vars['god']->roman_god_name ?></h5>
                <p class="card-text">Roman Equivalent</p>
            </div>
        </div>
    </div>

    <div class="position-absolute god_card_IMG card_03">
        <img class="card-img-top rounded mt-1" src="/public/images/cards/<?= $vars['god']->god_card_image ?>">
    </div>
</div>


<div class="position-absolute card_04">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">God Name</h5>
            <p class="card-text">bla bla</p>
        </div>
    </div>
</div>


</div>


<!-- <div class="centerTekstje text-white">

    <h1>This is the God Page of the God called : <?= $vars['god']->god_name ?></h1>
    <br>
    <h2>The ID of this God is : <?= $vars['god']->id ?></h2>
    <br>
    <br>
    <div>
        <a href="/allgods" class="btn btn-mau">Click here to return</a>
    </div>
</div> -->