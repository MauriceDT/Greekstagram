<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid m-0 p-0">

    <img class="GodShowBG" src="/public/images/show_bg/<?= $vars['god']->god_page_image ?>" alt="">
    <!-- Here is the actual card content of the page -->
    <!-- Here is the actual card content of the page -->
    <div class="position-absolute card_01">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-1"><?= $vars['god']->god_name ?></h5>
            </div>
        </div>
    </div>

    <div class="position-absolute card_02 fs-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-4"><?= $vars['god']->roman_god_name ?></h5>
                <p class="card-text fs-5">Roman Equivalent</p>
            </div>
        </div>
    </div>

    <div class="position-absolute god_card_IMG card_03">
        <img class="card-img-top rounded mt-1" src="/public/images/cards/<?= $vars['god']->god_card_image ?>">
    </div>

    <div class="position-absolute card_04">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-2"><?= $vars['god']->god_title ?></h5>
            </div>
        </div>
    </div>

    <div class="position-absolute card_05">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-4"><?= $vars['god']->god_over ?></h5>
                <p class="card-text text-center fs-5">Known for</p>
            </div>
        </div>
    </div>

    <div class="position-absolute card_06">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $vars['god']->god_quote ?></h5>
            </div>
        </div>
    </div>

    <div class="position-absolute card_07">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-1"><?= $vars['god']->god_group ?></h5>

            </div>
        </div>
    </div>

    <div class="position-absolute card_08">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-4"><?= $vars['god']->known_father ?> <?= $vars['god']->known_mother ?></h5>
                <p class="card-text text-center fs-5">Known Parents</p>
            </div>
        </div>
    </div>

    <?php if ((int)$vars['god']->has_had_sex_with_zeus === 1) : ?>
        <div class="position-absolute card_09 p-1 ">
            <div class="card">
                <div class="card-body">
                    <img id="ZeusHeart" class="center" src="/public/images/heart.svg" />
                    <h5 class="card-title fs-5 text-center">Has had relations with Zeus</h5>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <a id="GoBackKnop" href="/allgods"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark mt-4">All Gods Page</button></a>


</div>