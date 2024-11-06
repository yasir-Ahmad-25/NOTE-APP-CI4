<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>
<div class="contianer mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mx-3" style="text-transform: uppercase;">W E L C O M E - B A C K - <?= $user['username']; ?> 🔥</h1>
        </div>
        <div class="col-md-4 d-flex">
            <button type="button" class="text-light px-3 bg-success rounded float-end mx-2" id="openModalBtn" class="open-modal-btn"><i class="fa-solid fa-plus" style="color: #ffffff;"></i>  CREATE NOTE  </button>
            <a href="Logout" class="text-light text-decoration-none bg-danger rounded px-3 float-end mx-2 mt-2"><i class="fa-solid fa-right-from-bracket mt-3" style="color: #ffffff;"></i> LOGOUT</a>
        </div>
    </div>
</div>
<hr>



<div class="container-fluid">
    <div class="d-flex flex-wrap">
        <?php $noteCount = 1; ?> <!-- Initialize the note counter -->
        <?php foreach($notes as $note): ?>
            <div class="col-md-4">
                <div class="card mt-3" style="width: 30rem;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 style="font-size:24px;">N O T E - <?= $noteCount++; ?></h3>
                            </div>
                            <div class="col-md-3 d-flex">
                                <a href="/note/<?= $note['id'];?>" class="btn bg-warning"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;font-size:14px;"></i></a>
                                <a href="/delete/<?= $note['id']; ?>" class="btn bg-danger mx-2"><i class="fa-solid fa-trash" style="color: #ffffff;font-size:14px;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 style="text-align: justify;"><?= $note['note']; ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Modal -->


<!-- Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="moda-header d-flex">
            <h3 class="mt-4">CREATE NEW NOTE</h3>
            <span class="close-btn ms-auto text-danger" id="closeModalBtn">&times;</span>
        </div>
        <hr>
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <h5>Note</h5>
                    <textarea name="Note_Field" id="" class="form-control" placeholder="Enter your Note Here...."></textarea>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">CREATE</button>
        </div>
    </form>
    </div>
</div>


<?= $this->endSection('content'); ?>