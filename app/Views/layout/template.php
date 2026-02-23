<!DOCTYPE html>
<html>
<head>
    <title>Portal Berita</title>
</head>
<body>

<h1>Portal Berita CI4</h1>
<hr>

<?php if(session()->get('logged_in')):?>

    Halo, <?=session()->get('name')?> |
<a href="/logout">Logout</a>

<?php else:?>
    <a href="/login">Login</a>

<?php endif;?>

<br>
<?= $this->renderSection('content') ?>

<hr>
<small>© Portal Berita 2026</small>

</body>
</html>
