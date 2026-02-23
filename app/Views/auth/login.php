<h2>Login</h2>

<?php if(session()->getFlashdata('error')):?>
<p style="color:red"><?=session()->getFlashdata('error')?></p>
<?php endif;?>

<form method="post" action="/login">
<?= csrf_field() ?>

Email<br>
<input type="text" name="email"><br><br>

Password<br>
<input type="password" name="password"><br><br>

<button type="submit">Login</button>
</form>