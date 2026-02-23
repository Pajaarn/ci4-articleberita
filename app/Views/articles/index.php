<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<a href="/articles/create">+ Tambah Artikel</a>
<br><br>
<h2>Daftar Artikel</h2>

<ul>
<?php foreach ($articles as $a): ?>
    <li>
        <a href="/article/<?= $a['id'] ?>">
            <?= $a['title'] ?>
        </a>
        <br>
        <small>Kategori: <?= $a['category'] ?> | Penulis: <?= $a['name'] ?></small>
    </li>
<?php endforeach ?>
</ul>

<?php if(session()->getFlashdata('success')): ?>
<p style="color:green"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Kategori</th>
    <th>Penulis</th> <th>Aksi</th>
</tr>

<?php $no=1; foreach($articles as $a): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $a['title'] ?></td>
    <td><?= $a['category'] ?></td>
    <td><?= $a['name'] ?></td> <td>
        <a href="/article/<?= $a['id'] ?>">Detail</a>
        <a href="/articles/edit/<?= $a['id'] ?>">Edit</a>

        <form action="/articles/delete/<?= $a['id'] ?>" method="post" style="display:inline;">
            <?= csrf_field() ?>
            <button onclick="return confirm('Hapus artikel?')">Delete</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?= $this->endSection() ?>