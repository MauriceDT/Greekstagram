<?php require 'views/partials/header.view.php' ?>


<body>
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
        <div class="row">
            <?php foreach ($gods['god_name'] as $god) : ?>
                <div class="col-md-4 p-3">
                    <p><?php $god['god_name'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

<?php require 'views/partials/footer.view.php' ?>