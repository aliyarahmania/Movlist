<?php $this->extend('/Home') ?>
<?php $this->section('section') ?>

<div class="container">
    <div class="mt-5" style="display: flex; align-items: center; justify-content: center;">
        <img src="/resources/gambar-judul.jpeg" alt="" class="img-fluid" style="width: 800px;">
    </div>

    <div class="mt-5">
        <a href="/drakor/add"><button class="btn btn-success">ADD MOVIE</button></a>
    </div>
    <div class="mt-5">
        <?php $no = 1;
        foreach ($data as $row) : ?>
            <div class="mb-5 rounded-4 p-3" style="background-color:aliceblue;">
                <div class="">
                    <p>
                    <h1><?= $no . ". "; ?><?= $row['judul']; ?></h1>
                    </p>
                </div>
                <h6>Deskripsi : </h6>
                <p><?= $row['deskripsi']; ?></p>
                <h6>Durasi : </h6>
                <span><?= $row['durasi']; ?></span>
                <div class="text-end">
                    <a href="/drakor/edit/<?= $row['id']; ?>"><button class="btn btn-success">EDIT</button></a>
                    <a href="/drakor/delete/<?= $row['id']; ?>"><button class="btn btn-danger">HAPUS</button></a>
                </div>
            </div>
        <?php $no++;
        endforeach; ?>
    </div>
</div>

<?php $this->endSection() ?>