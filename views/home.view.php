<?php require 'views/partials/header.view.php' ?>


<div id="homepage_achtergrond">
    <?php if (isset($_SESSION) && isset($_SESSION['user'])) : ?>
        <div class="container-fluid align-items-center">
            <div class="centerTekstje p-9 text-center">
                <div class="" id="homepage_center_text">
                    <div class="text-bold text-white fs-1 fw-bold">
                        Welcome back !
                    </div>
                    <a href="/allgods"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark mt-4">All Gods Page</button></a>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container-fluid align-items-center">
            <div class="centerTekstje p-9 text-center">
                <div class="" id="homepage_center_text">
                    <div class="text-bold text-white fs-1 fw-bold">
                        Welcome to Greekstagram
                    </div>
                    <div class="text-white fs-3 fw-bold">
                        On this webpage you can make an account <br> and vote in our divine polls
                    </div>
                    <a href="/login"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark mt-4">Login</button></a>
                    <a href="/register"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark mt-4">Register</button></a>

                </div>
            </div>
        </div>
    <?php endif; ?>

</div>