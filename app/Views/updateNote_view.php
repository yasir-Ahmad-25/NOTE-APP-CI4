<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 border border-secondary rounded">
    <h3 class="text-center">U P D A T E - N O T E </h3>
    <hr>
    <form action="" method="post">
        <div class="form-group mb-5">
            <h4>NOTE: </h4>
            <textarea name="Note_Field" id="" class="form-control"><?= $note['note'];?></textarea>
        </div>

        <button type="submit" class="btn btn-warning w-100 mb-4">UPDATE NOTE</button>
    </form>
</div>

<?= $this->endSection('content'); ?>