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
                <p> <button class="btn btn-warning" id="allGodsPageVoteButton">Click Here To Show Vote</button> </p>

                <p class="" id="allGodsPageShowGods">Show All Gods &darr; &darr; &darr;</p>
            </div>
        </div>
    </div>
</div>

<!-- Actual content below the HEADER -->
<!-- Actual content below the HEADER -->
<!-- Actual content below the HEADER -->

<div class="container mt-5">
    <div class="row row-cols-3">
        <?php foreach ($vars['gods'] as $god) : ?>
            <!-- <p>dd($god->god_group);</p> -->
            <div class="card col m-1" id="allGodsPageCard">
                <img class="card-img-top" src="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $god->god_name ?>
                    </h5>
                    <p class="card-text"><?= $god->god_title ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $god->god_group ?>
                    </li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>