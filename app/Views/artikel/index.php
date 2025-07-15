<?= $this->include('template/header'); ?> 

<?php if ($artikel): foreach ($artikel as $row): ?> 
    <article class="entry"> 
        <h2>
            <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                <?= $row['judul']; ?>
            </a>
        </h2> 
        <p>Kategori: <?= $row['nama_kategori'] ?></p> 
        <?php if (!empty($artikel['gambar'])): ?>
            <img src="<?= base_url('uploads/artikel/' . $artikel['gambar']) ?>" alt="<?= esc($artikel['judul']) ?>" width="500">
        <?php endif; ?>

        <p><?= substr($row['isi'], 0, 200); ?>...</p> 
    </article> 
    <hr class="divider" /> 
<?php endforeach; else: ?> 
    <article class="entry"> 
        <h2>Belum ada data.</h2> 
    </article> 
<?php endif; ?> 

<?= $this->include('template/footer'); ?> 
