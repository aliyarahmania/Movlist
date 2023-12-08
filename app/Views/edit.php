<?php $this->extend('Home') ?>
<?php $this->section('section') ?>

<div class="container">
    <div class="mt-5 text-start">
        <a href="/drakor"><button class="btn btn-success">Back</button></a>
    </div>
    <div class="text-center">
        <h1>EDIT MOVIE</h1>
    </div>
    <div class="mt-3">
        <div>
            <form action="/drakor/edit/<?= $data['id']?>" method="post">
                <div class="input-group mb-3">
                    <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Judul" 
                    aria-label="Username" 
                    aria-describedby="basic-addon1"
                    name="judul"
                    id="judul"
                    value="<?= $data['judul'] ?>">
                </div>
                <div class="input-group mb-3">
                    <textarea 
                    class="form-control" 
                    placeholder="Deskripsi" 
                    aria-label="Username" 
                    aria-describedby="basic-addon1"
                    name="deskripsi"
                    id="deskripsi"
                    ><?= $data['deskripsi'] ?></textarea>
                </div>
                <div class="input-group mb-3">
                    <input 
                    type="time" 
                    class="form-control" 
                    placeholder="Judul" 
                    aria-label="Username" 
                    aria-describedby="basic-addon1"
                    name="durasi"
                    id="durasi"
                    value="<?= $data['durasi'] ?>">
                </div>
                <div class="input-group mb-3 d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection() ?>