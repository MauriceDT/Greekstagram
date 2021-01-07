<?php require('partials/header.view.php'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>My Username = <span class="bg-danger text-white"><?= $_SESSION['user']['username'] ?></span></h1>
<br>
<br>
<h2>And I am a follower of <span class="bg-success text-white"><?= $_SESSION['user']['follows_god'] ?></span></h2>
<h2>My E-mail Adress = <span class="bg-warning text-white"><?= $_SESSION['user']['email'] ?></span></h2>
<br>
<br>
<a href="/allgods" class="text-dark fs-2 fw-bold">!!Go to All Gods Page!!</a>
<br>
<br>
<br>
<?php require('partials/footer.view.php');
?>