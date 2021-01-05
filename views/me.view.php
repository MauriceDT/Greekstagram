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
<h1>Dit ben ik en mijn naam is <span class="bg-danger text-white"><?= $_SESSION['user']['username'] ?></span></h1>
<h2>En ik volg <?= $_SESSION['user']['follows_god'] ?></h2>
<br>
<br>
<br>
<br>
<br>
<?php require('partials/footer.view.php');
?>