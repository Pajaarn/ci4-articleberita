<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h2><?= $article['title'] ?></h2>
<?php if (!empty($article['image'])) : ?>
    <img src="/uploads/<?= $article['image'] ?>" alt="<?= $article['title'] ?>" width="400" style="margin-bottom: 20px; border-radius: 8px;">
<?php else : ?>
    <p><em>Gambar tidak tersedia</em></p>
<?php endif; ?> 
<p><?= $article['content'] ?></p>



<a href="/">Kembali</a>

<?= $this->endSection() ?>