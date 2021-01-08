<?php require 'views/partials/header.view.php' ?>

<!-- HEADER with Vote Text/Button and Show more Text -->
<!-- HEADER with Vote Text/Button and Show more Text -->
<!-- HEADER with Vote Text/Button and Show more Text -->
<div id="allgods_bg">
    <div class="container-fluid" id="allGodsPageFadeIn">
        <div class="row thisHasToMoveDown">
            <div class="col-md-6">
                <img class="img-fluid" id="votePic001" src="/public/images/zeus_hera.jpeg" alt="">
            </div>
            <div class="col-md-6 text-white">
                <p class="" id="allGodsPageVoteText">There is an active vote</p>
                <p> <button class="btn btn-mau" id="allGodsPageVoteButton">Click Here To Show Vote</button> </p>

                <p class="" id="allGodsPageShowGods">Show All Gods &darr; &darr; &darr;</p>
            </div>
        </div>
    </div>
</div>

<!-- Actual content below the HEADER -->
<!-- Actual content below the HEADER -->
<!-- Actual content below the HEADER -->

<div class="container mt-5">
    <div class="row">
        <?php foreach ($vars['gods'] as $god) : ?>
            <!-- <p>dd($god->god_group);</p> -->
            <div class="card col-md-4 m-2 text-center pb-4" id="allGodsPageCard">
                <a href="allgods/detail?god_id=<?= $god->id ?>">
                    <img id="god_card_IMG" class="card-img-top rounded mt-3" src="/public/images/cards/<?= $god->god_card_image ?>">
                    <div class="card-body">
                        <h5 class="card-title fs-3 fw-bold" id="god_card_name">
                            <?= $god->god_name ?>
                        </h5>
                        <p class="card-text mt-2 fs-5 fw-bold" id="god_card_title"><?= $god->god_title ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-4" id="god_card_group">
                            <?= $god->god_group ?>
                        </li>
                    </ul>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>