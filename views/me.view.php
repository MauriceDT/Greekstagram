<?php require('partials/header.view.php'); ?>
<div class="container-fluid m-0 p-0 me_page_achtergrond" id="">
    <div class="position-absolute me_page_card_01">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-1"><?= $_SESSION['user']['username'] ?></h5>
            </div>
        </div>
    </div>
    <div class="position-absolute me_page_card_02">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-1">I serve only <?= $_SESSION['user']['follows_god'] ?></h5>
            </div>
        </div>
    </div>
    <div class="position-absolute me_page_card_03">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-1">My current email is <?= $_SESSION['user']['email'] ?></h5>
            </div>
        </div>
    </div>
    <a id="GoBackKnop" href="/allgods"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark mt-4">All Gods Page</button></a>

</div>